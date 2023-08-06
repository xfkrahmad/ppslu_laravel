<head>
    <title>Email Notification</title>
</head>

<body style="background-color: #f7fafc; padding: 20px;">
    <div style="background-color: #ffffff; padding: 20px; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
        <h1 style="font-size: 24px; font-weight: bold; margin-bottom: 10px;">Hallo, Seseorang telah mendaftar</h1>

        <div
            style="border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0; padding: 10px 0; margin-bottom: 10px;">
            <p style="font-size: 18px; font-weight: bold;">Dengan Detail:</p>
            <ul style="list-style: disc; margin-left: 20px;">
                <li style="margin-bottom: 8px;">Nama: {{ $senderName }}</li>
                <li style="margin-bottom: 8px;">Alamat: {{ $senderAddress }}</li>
            </ul>
            <p style="font-size: 18px; font-weight: bold;">Kunjungi Link Berikut jika ingin melihat secara lengkap</p>
            <div>
                <a href="{{ $linkRegistrated }}"
                    style="display: inline-block; background-color: #4CAF50; color: white; padding: 10px 20px; text-decoration: none;">Lihat
                    Detail</a>
            </div>
        </div>

        <p style="font-size: 14px; color: #718096;">Ini adalah email notifikasi yang dibuat menggunakan Laravel.</p>
    </div>
</body>

</html>
