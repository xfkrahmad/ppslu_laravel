<head>
    <title>Email Notification</title>
</head>

<body style="background-color: #f7fafc; padding: 20px;">
    <div style="background-color: #ffffff; padding: 20px; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
        <h1 style="font-size: 24px; font-weight: bold; margin-bottom: 10px;">Hallo, Seseorang mengirimi pesan</h1>

        <div
            style="border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0; padding: 10px 0; margin-bottom: 10px;">
            <p style="font-size: 18px; font-weight: bold;">Dengan Detail:</p>
            <ul style="list-style: disc; margin-left: 20px;">
                <li style="margin-bottom: 8px;">Nama: {{ $sender }}</li>
                <li style="margin-bottom: 8px;">Email: {{ $senderEmail }}</li>
            </ul>
            <p style="font-size: 18px; font-weight: bold;"> Isi Pesan:</p>
            <div>
                {!! $content !!}
            </div>
        </div>

        <p style="font-size: 14px; color: #718096;">Ini adalah email notifikasi yang dibuat menggunakan Laravel.</p>
    </div>
</body>

</html>
