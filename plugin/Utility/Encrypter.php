<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/31/2021
 * Time: 9:50 AM
 */

namespace onOffice\WPlugin\Utility;


use http\Exception\RuntimeException;

class Encrypter
{
	const CIPHER = 'AES-128-CBC';
	private static $key = ONOFFICE_CREDENTIALS_ENC_KEY;

	public static function encrypt($plainText): string
	{
		if (!extension_loaded('openssl')) {
			return $plainText;
		}

		$ivlen = openssl_cipher_iv_length(self::CIPHER);
		$iv = openssl_random_pseudo_bytes($ivlen);
		if ($iv === false) {
			throw new RuntimeException('iv is false');
		}
		$cipherText = openssl_encrypt($plainText, self::CIPHER, self::$key, OPENSSL_RAW_DATA, $iv);
		$hmac = hash_hmac('sha256', $cipherText, self::$key, $as_binary = true);
		return base64_encode($iv . $hmac . $cipherText);
	}

	public static function decrypt($cipherText)
	{
		if (!extension_loaded('openssl')) {
			return $cipherText;
		}
		$decodeText = base64_decode($cipherText);
		$ivlen = openssl_cipher_iv_length(self::CIPHER);
		$iv = substr($decodeText, 0, $ivlen);
		$hmac = substr($decodeText, $ivlen, $sha2len = 32);
		$cipherTextRaw = substr($decodeText, $ivlen + $sha2len);
		$plainText = openssl_decrypt($cipherTextRaw, self::CIPHER, self::$key, OPENSSL_RAW_DATA, $iv);
		$calcmac = hash_hmac('sha256', $cipherTextRaw, self::$key, $as_binary = true);
		return hash_equals($hmac, $calcmac) ? $plainText : $cipherText;
	}
}