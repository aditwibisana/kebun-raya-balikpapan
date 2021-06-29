<body>
    <div id="header">
        <i>No Struk. KRBPN/OL</i>
        <div align="center">
            <p><b><span class="style1">Kebun Raya Balikpapan</span><br></b>
                Jalan Soekarno Hatta Km. 15, Karang Joang, Kec. Balikpapan Utara, Kota Balikpapan, Kalimantan Timur 76127<br>

                <hr>
            </p>

            <strong>Bukti Pembayaran </strong>
        </div>
    </div>
    <table width="382" border="0" align="center">
        <tr>
            <td width="125" height="31">Nama Pemesan</td>
            <td width="185">: {{auth()->user()->name}}</td>
        </tr>
        <tr>
            <td height="35">Email</td>
            <td>: {{auth()->user()->email}}</td>
        </tr>
        <tr>
            <td height="35">No Hp</td>
            <td>: {{auth()->user()->no_hp}}</td>
        </tr>
        <tr>
            <td height="37">Tanggal Pesan</td>
            <td>: {{$pemesanan->nama_tempat}}</td>
        </tr>
        <tr>
            <td height="37">Tanggal Pesan</td>
            <td>: {{$pemesanan->tanggal_pesan}}</td>
        </tr>

        <tr>
            <td height="37">Lama Menginap</td>
            <td>: {{$pemesanan->durasi}} Hari</td>
        </tr>
        <tr>
            <td height="37">Check In</td>
            <td>: {{$pemesanan->check_in}}</td>
        </tr>
        <tr>
            <td height="37">Check In</td>
            <td>: {{$pemesanan->check_out}}</td>
        </tr>
        <tr>
            <td height="37">Harga</td>
            <td>: @currency($pemesanan->harga)</td>
        </tr>
        <tr>
            <td height="37">Total Bayar</td>
            <td>: @currency($pemesanan->total_harga)</td>
        </tr>
        @if($pemesanan->bukti == 'Belum Ada')
        <tr>
            <td height="37">Status Pembayaran</td>
            <td>: Belum Lunas</td>
        </tr>
        @else
        <tr>
            <td height="37">Status Pembayaran</td>
            <td>: Lunas</td>
        </tr>
        @endif
        <tr>
            <td height="37">Status Konfirmasi</td>
            <td>: {{$pemesanan->konfirmasi}}</td>
        </tr>
    </table>
</body>