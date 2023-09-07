$PK="";

$pub_key = "-----BEGIN CERTIFICATE-----
MIIDuzCCAqOgAwIBAgIJAKqQynuEYKHMMA0GCSqGSIb3DQEBCwUAMHQxCzAJBgNV
BAYTAkRFMQwwCgYDVQQIDANOUlcxEDAOBgNVBAcMB0NvbG9nbmUxEjAQBgNVBAoM
CVF1ZXN0YmFjazELMAkGA1UECwwCUFMxJDAiBgNVBAMMG2d6NDcyNy5jdXN0b21l
cnZvaWNlMzYwLmNvbTAeFw0xOTA4MTQxMDEwMjVaFw0yOTA4MTMxMDEwMjVaMHQx
CzAJBgNVBAYTAkRFMQwwCgYDVQQIDANOUlcxEDAOBgNVBAcMB0NvbG9nbmUxEjAQ
BgNVBAoMCVF1ZXN0YmFjazELMAkGA1UECwwCUFMxJDAiBgNVBAMMG2d6NDcyNy5j
dXN0b21lcnZvaWNlMzYwLmNvbTCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoC
ggEBANoltMPmQIM+ARPefaJcMzIAdQ5xEAE2S+xTwEvpnLROWvD2zzRWgjisLccP
M+hK7cS5i92KtRoA55p66KQU+Mh+ki8cMKGOPjbiWWS/2Svk6SQs3Zm70mE6QqT4
hRP7WqTjIQsD7QiEBfBaWP1J9xwivUvQ1LUr+G13Ma356Ckw6XsH+u9mbFldD6Ia
H55nWe9xdXJrIiqJpahccgzbQrNQLRPVsOAV9rF3Pjo87Pq9cwi9qFhxnwuI7eTU
vH0W31fJINVi7o/Cnq2hQsseFpBd4gQ5lur2ql5abi9zey/bSli1Shc8iRV/9yZt
FS5nhKo81hN9gf2wUKBY9ER3xSkCAwEAAaNQME4wHQYDVR0OBBYEFEzeUwQz1KCl
HuEx46eupbh1MdDfMB8GA1UdIwQYMBaAFEzeUwQz1KClHuEx46eupbh1MdDfMAwG
A1UdEwQFMAMBAf8wDQYJKoZIhvcNAQELBQADggEBALCEMSu80dQlCGlt9NV6bd/b
7j9u3KEJUdSXUA+QiimtRwtGym0qbH0QKTjltJD7sMSJGjTUJ7p68QlUxqF5C8TT
zfUGUNeJ5JTX4GPfeQdv01pqeUVGp+ZRGuHquVNknItNzXgz5HSr9gd7FLnyGx0t
4X93yUi2Y2FJKPFyyKdaID9BbIED/hMcrkR/zOATNyu8Nsex2pRj4PmdmFz2yUvk
ksFbfLoKn2/8tJsHCx8o2AGycMACEFK9dB4NWj7lwZC5mUOPG0bMPI2CJHCgKEyN
/I/NZSkVS8oVR4O65pxcCmJVsN6u6J1qzlGE+hFYxIbpTXBUcrLv9L0TImAFWuM=
-----END CERTIFICATE-----";

$PK=openssl_get_publickey($pub_key);
$string="Some Important Data";

if (!$PK) {
    echo "Cannot get public key";
}

$finaltext="";

openssl_public_encrypt($string, $finaltext, $PK);

 
if (!empty($finaltext)) {
    
    openssl_free_key($PK);
    
    echo "Encryption OK!".PHP_EOL;
    
    echo 'base64Encoded: ' . base64_encode($finaltext).PHP_EOL; 
    
}else{
    
    echo "Cannot Encrypt".PHP_EOL;
    
}

###################################


$priv_key2 = "-----BEGIN PRIVATE KEY-----
MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQDaJbTD5kCDPgET
3n2iXDMyAHUOcRABNkvsU8BL6Zy0Tlrw9s80VoI4rC3HDzPoSu3EuYvdirUaAOea
euikFPjIfpIvHDChjj424llkv9kr5OkkLN2Zu9JhOkKk+IUT+1qk4yELA+0IhAXw
Wlj9SfccIr1L0NS1K/htdzGt+egpMOl7B/rvZmxZXQ+iGh+eZ1nvcXVyayIqiaWo
XHIM20KzUC0T1bDgFfaxdz46POz6vXMIvahYcZ8LiO3k1Lx9Ft9XySDVYu6Pwp6t
oULLHhaQXeIEOZbq9qpeWm4vc3sv20pYtUoXPIkVf/cmbRUuZ4SqPNYTfYH9sFCg
WPREd8UpAgMBAAECggEAe7bsmDjJl2SfmdQRLfXZ9t55hDIsoHNZhXJN2P9opnzV
aFigVA9HlLpYz85YYsGzrGCJ6J9Ua6XdsydHLl7SZGobn2n+TnDr6ZZemhuPHyyX
57MmDZyOCCPRTdu/JQDkfCRvRd75G148O/4Q/7xlzugIsKmDKCgCoJn7a64RsuGE
fGSeV8R/hcC8rE7Wdocdn77whIZhsqzTc5QgzMQO/DwLqBYha3fcyv5PW1KEPxx7
SLJE6Q5hbomjnXlQgHV0J6wZF6Ur6EjOnYUNS6Vjg0YYjHpEkrZuV05H9l1ifQFn
Zek/IXs9ulu10cGjn6Xq7zIroWpWC6rKIiREkZ4PbQKBgQD/fh4AgJqz8YsDcO5e
O64BwdmBLbNv7GeWrIZxjM6sodc3oEc0nYxA0Hu6CY0y4Rf10bRrMnpiQgtF4zwk
+IzGpqwGdqjzYSamLFBR5YeZ3aFlnEF61QhFrKfrfbLcEc0CVm9rcm0WR8p8U4Eg
0KLMIbpweoakwmrkkk44uv6KlwKBgQDalJqckdXUZV3cWxRxEi48nSwr7QBxqXns
+4yvbmA/XLqNZyVr/JqVdzgZbKjeoQBGX3M3vTaxEWf8cYDNLO0xv7iVaLuRhshH
5FvMKMKYfi9Qb+mAEc4tt5+aAVUADdXvoQMnZRosTzJ1T3ifQh3xGGb9yztfz52S
7GDaZTDmPwKBgQDEZmOTyUijKPvO4mIqyD/EFAsqVUJJuHYNCoSzByXc6PAzT59N
IAsvy9RAt5T2Vrh/e/vwJ7aSj+hwifSzCunUz00QDuljZfw643e+7O3nZsrp/EsN
rHOWc9oFmfQDXh+1O1KdSzH2XauXFO3/lsJ+nzLdwiJ8xwM6wAknbP+88wKBgEHO
qbnnwjv/BMI5/a6JLbh8DXdwFEkkIBw0I8gRcBLDhTrbSg338EZ9rTsiVrkoOd/2
DsdCRTwMJIWBWqjrFMJ8mUMKVCZdMOFMJEMUJnooy2/pMaCoO63R8dA5BHFOuRE7
JarvqnCaq3NcKNGx4zfaA+/3BvoylJtOZV57RrybAoGAev6anKHw4aLjvjyIMbvk
82IKZFlsuL8Y8nO/mIsZAdujEfzo9UAsrW94oYsTckr3qNXb9HwU2JCFxiIPwttj
yNFjm7J/WVbkl5D1X1FgrryVTazYiFWx5+6ONDDnoiFllMYP+tiipzy3moArseDV
JUWy+1Q54Jfz6qdVjm1f37Y=
-----END PRIVATE KEY-----
";
$PK2=openssl_get_privatekey($priv_key2);

$Crypted=openssl_private_decrypt($finaltext,$Decrypted,$PK2);

if (!$Crypted) {
    echo "not decrypt";
    
}else{
    
    echo "Decrypted Data: " . $Decrypted . PHP_EOL;
    
}
//bootstrap 
