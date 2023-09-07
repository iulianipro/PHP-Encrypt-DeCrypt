<?php

/**
 * Generate a self-signed SSL certificate using OpenSSL.
 * Parameters:
 * @param string $domain - The domain name for which the certificate should be generated.
 * @param string $outputDir - The directory where the certificate files should be saved.
  
 * Example:
 * generateSSLCertificate('example.com', '/path/to/output');
 */
function generateSSLCertificate(string $domain, string $outputDir): void {
    // Check if OpenSSL extension is available
    if (!extension_loaded('openssl')) {
        throw new Exception("OpenSSL extension is not available.");
    }

    // Generate private key
    $privateKey = openssl_pkey_new();

    // Generate certificate signing request (CSR)
    $csr = openssl_csr_new([
        'commonName' => $domain,
    ], $privateKey);

    // Generate self-signed certificate
    $certificate = openssl_csr_sign($csr, null, $privateKey, 365);

    // Create output directory if it doesn't exist
    if (!is_dir($outputDir)) {
        mkdir($outputDir, 0755, true);
    }

    // Save private key and certificate files
    openssl_pkey_export_to_file($privateKey, $outputDir . '/private.key');
    openssl_x509_export_to_file($certificate, $outputDir . '/certificate.crt');
}

// Example usage
try {
    generateSSLCertificate('example.com', '/path/to/output');
    echo "SSL certificate generated successfully.";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>
