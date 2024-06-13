<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BaconQrCode\Renderer\Image\Png;
use BaconQrCode\Writer;

class QRCodeController extends Controller
{
    public function generateQRCode(Request $request)
    {
        $userID = $request->input('user_id');
        $attendanceType = $request->input('attendance_type');

        // Informasi kehadiran yang akan dimasukkan ke dalam QR code
        $attendanceInfo = [
            'user_id' => $userID,
            'attendance_type' => $attendanceType,
            'timestamp' => now()->format('Y-m-d H:i:s')
        ];

        // Generate QR code dengan informasi kehadiran
        $qrCodeWriter = new Writer(new Png());
        $qrCode = $qrCodeWriter->writeString(json_encode($attendanceInfo));

        // Simpan QR code sebagai file PNG
        $qrCodePath = public_path('attendance_qr_code.png');
        file_put_contents($qrCodePath, $qrCode);

        return response()->download($qrCodePath)->deleteFileAfterSend(true);
    }
}
