<!DOCTYPE html>
<html>
<head><meta charset="utf-8"></head>
<body style="font-family: sans-serif; color: #1e293b; padding: 24px;">
    <h2 style="color: #1e3a5f;">New Client Inquiry — {{ $data['company'] }}</h2>
    <table style="width:100%; border-collapse:collapse;">
        <tr><td style="padding:8px 0; font-weight:600; width:120px;">Name</td><td>{{ $data['name'] }}</td></tr>
        <tr><td style="padding:8px 0; font-weight:600;">Company</td><td>{{ $data['company'] }}</td></tr>
        <tr><td style="padding:8px 0; font-weight:600;">Email</td><td><a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></td></tr>
    </table>
    <h3 style="color:#1e3a5f; margin-top:24px;">Project Description</h3>
    <p style="white-space:pre-wrap; background:#f1f5f9; padding:16px; border-radius:6px;">{{ $data['description'] }}</p>
    <hr style="margin-top:32px; border:1px solid #e2e8f0;">
    <p style="color:#64748b; font-size:12px;">Sent via Karama Data website contact form.</p>
</body>
</html>
