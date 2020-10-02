@extends('client._components.master')
@section('content')
@include('client._components.top_nav')
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.min.js"></script>
<div class="container mb-5 px-xl-5">
    <div class="row mt-4" id="menu">
        <form class="card col-12 p-4 border-0 shadow-sm" action="{{ url('/getting-started') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        @include('client.getting_started._components.side_nav')
                    </div>
                    <div class="col-9">
                        <div class="mb-3 p-3" style="height: 400px; background-color: #e8f5e9; overflow-y: scroll; font-size: .8rem">
                                <p class="text-center">
                                    <strong>Perjanjian Kerja Sama <em>Project Funding</em> antara Penyelenggara dan Pemodal</strong>
                                </p>
                                <p>Perjanjian Penyelenggaraan <em>Project Funding</em> antara Penyelenggara dan Pemodal ini (<strong>"Perjanjian Pemodal"</strong>) dibuat dan ditandatangani pada tanggal yang disebutkan di bawah ini, oleh dan antara:
                                </p>
                                <ol style="list-style-type: upper-roman">
                                    <li>
                                        <p>
                                            <strong>PT. Inspirasi Karya Teknologi Nusantara</strong>, suatu perseroan terbatas yang didirikan dan dijalankan berdasarkan hukum Republik Indonesia, beralamat di Jl. Shinta 22 Purwosari, Kroyo, Kec. Karangmalang, Kabupaten Sragen 57221, dalam hal ini diwakili oleh Eko Wahyu Saputro, dalam kedudukannya sebagai Direktur Utama, dengan demikian oleh karenanya sah bertindak untuk dan atas nama PT. Inspirasi Karya Teknologi Nusantara (<strong>“Penyelenggara”</strong>); dan
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Pemodal yakni pihak yang sudah mengisi data identitas di awal (untuk selanjutnya disebut sebagai <strong>“Pemodal”</strong>)
                                        </p>
                                    </li>
                                </ol>
                                <p>
                                    Untuk selanjutnya Penyelenggara dan Pemodal secara sendiri-sendiri disebut sebagai <strong>“Pihak”</strong> dan secara bersama-sama disebut sebagai <strong>“Para Pihak”</strong>.
                                </p>
                                <p>
                                    Para Pihak terlebih dahulu menerangkan hal-hal sebagai berikut:
                                </p>
                                <ol style="list-style-type: decimal">
                                    <li>
                                        <p>
                                            Bahwa Penyelenggara adalah perusahaan yang bergerak di bidang portal web atau platform digital dengan tujuan komersil dan saat ini sedang dalam proses perolehan perijinan sebagai Penyelenggara <em>Project Funding</em> berbasis Teknologi Informasi secara online dari Otoritas Jasa Keuangan sehubungan dengan kegiatannya dimaksud.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Bahwa Pemodal adalah pihak yang bermaksud untuk menanamkan dana miliknya pada Pendanaan dibidang Pertanian, Peternakan dan Perikanan yang diterbitkan, sehubungan dengan kegiatan Penyelenggara sebagaimana dimaksud dalam butir 1 di atas.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Bahwa Para Pihak sepakat untuk menandatangani Perjanjian Pemodal ini guna memenuhi ketentuan peraturan yang diterbitkan oleh Otoritas Jasa Keuangan mengenai <em>Project Funding</em> Melalui Penawaran Pendanaan dibidang Pertanian, Peternakan dan Perikanan Berbasis Teknologi Informasi yang diperbaharui dari waktu ke waktu.
                                        </p>
                                    </li>
                                </ol>
                                <p>
                                    Untuk selanjutnya, berdasarkan hal-hal yang disampaikan di atas, maka Para Pihak sepakat untuk membuat dan menandatangani Perjanjian Pemodal ini dengan ketentuan-ketentuan dan syarat-syarat sebagai berikut:
                                </p>
                                <p class="text-center">
                                    <strong>
                                        PASAL 1<br/>
                                        RUANG LINGKUP PERJANJIAN PEMODAL
                                    </strong>
                                </p>
                                <p>
                                    Para Pihak dengan ini menyetujui untuk melakukan suatu kerjasama selama Jangka Waktu Perjanjian Pemodal (sebagaimana didefinisikan di bawah ini) dimana Pemodal akan melakukan Pendanaan dibidang Pertanian, Peternakan dan Perikanan melalui Penyelenggara selama Masa Penawaran Pendanaan dibidang Pertanian, Peternakan dan Perikanan.
                                </p>
                                <p class="text-center">
                                    <strong>
                                        PASAL 2<br/>
                                        MEKANISME PENDANAAN DIBIDANG PERTANIAN, PETERNAKAN DAN PERIKANAN
                                    </strong>
                                </p>
                                <ol style="list-style-type: decimal">
                                    <li>
                                        <p>
                                            Pendanaan dibidang Pertanian, Peternakan dan Perikanan oleh Pemodal dalam penawaran Pendanaan dibidang Pertanian, Peternakan dan Perikanan melalui <em>Project Funding</em> dilakukan dengan menyetorkan sejumlah dana pada Rekening Penampungan.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Penyelenggara wajib memberikan tanda terima penyerahan dana dari Pemodal kepada pelaku usaha paling lambat 3 (tiga) Hari Kerja setelah berakhirnya Masa Penawaran Pendanaan dibidang Pertanian, Peternakan dan Perikanan, terkecuali Proyek menjadi batal demi hukum, termasuk melakukan pengkinian atas Saldo Akun.Bahwa Pemodal adalah pihak yang bermaksud untuk menanamkan dana miliknya pada Pendanaan dibidang Pertanian, Peternakan dan Perikanan yang diterbitkan, sehubungan dengan kegiatan Penyelenggara sebagaimana dimaksud dalam butir 1 di atas.
                                        </p>
                                        <p>
                                            Mengacu pada paragraf di atas, Proyek menjadi batal demi hukum, dalam hal jumlah minimum urun dana tidak terpenuhi.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Manfaat bersih dari penempatan dana sebagaimana dimaksud dalam Pasal 3 Ayat (2) di atas akan dikembalikan kepada Pemodal secara proporsional.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Penyelenggara akan mendistribusikan Pendanaan dibidang Pertanian, Peternakan dan Perikanan kepada Pemodal paling lambat 3 (tiga) Hari Kerja setelah Penyelenggara menerima Pendanaan sebagaimana dimaksud dalam Pasal 3 Ayat (3) di atas. Pendistribusian dimaksud dapat dilakukan secara elektronik melalui rekening penampungan secara fisik melalui pengiriman sertifikat Pendanaan dibidang Pertanian, Peternakan dan Perikanan.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Dalam hal Pendanaan yang dibeli oleh Pemodal berupa Pendanaan dibidang Pertanian, Peternakan dan Perikanan, bukti kepemilikan berupa catatan kepemilikan Pendanaan dibidang Pertanian, Peternakan dan Perikanan yang terdapat dalam rekening.
                                        </p>
                                    </li>
                                </ol>
                                <p class="text-center">
                                    <strong>
                                        PASAL 3<br/>
                                        HAK DAN KEWAJIBAN PARA PIHAK
                                    </strong>
                                </p>
                                <ol style="list-style-type: decimal">
                                    <li>
                                        Hak dan Kewajiban Pemodal
                                        <ol style="list-style-type: lower-latin">
                                            <li>
                                                Hak
                                                <ol style="list-style-type: lower-roman">
                                                    <li>
                                                        <p>
                                                            Pemodal dapat membatalkan rencana pembelian Pendanaan dibidang Pertanian, Peternakan dan Perikanan melalui <em>Project Funding</em> paling lambat dalam waktu 48 (empat puluh delapan) jam setelah melakukan pembelian Pendanaan dibidang Pertanian, Peternakan dan Perikanan dengan cara menyetorkan sejumlah dana pada Rekening Penampungan terlebih dahulu, sebagai bentuk peningkatan (<em>top up</em>) Saldo Akun. Dalam hal terjadi pembatalan pembelian Pendanaan dibidang Pertanian, Peternakan dan Perikanan, maka Penyelenggara wajib mengembalikan dana kepada Pemodal paling lambat 2 (dua) Hari Kerja setelah pembatalan pemesanan Pemodal namun dengan dapat dikenakan biaya yang mungkin timbul terkait dengan adanya pembelian dan pembatalan atas Pendanaan dibidang Pertanian, Peternakan dan Perikanan dimaksud.
                                                        </p>
                                                    </li>
                                                </ol>
                                            </li>
                                            <li>
                                                Kewajiban
                                                <ol style="list-style-type: lower-roman">
                                                    <li>
                                                        <p>
                                                            Di dalam pembelian Pendanaan dibidang Pertanian, Peternakan dan Perikanan, Pemodal wajib untuk memiliki dan menjaga kemampuan untuk membeli paket,serta memiliki kemampuan analisis risiko terhadap paket.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            Pemodal wajib untuk memberikan dokumen dan/atau informasi yang sah / valid dan dapat dipertanggungjawabkan atas diri Pemodal, termasuk Pemodal ataupun wakilnya telah mempunyai kapasitas hukum dan/atau ijin yang diperlukan dari lembaga pemerintah yang berwenang.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            Pemodal wajib untuk menandatangani menyetujui Syarat dan Ketentuan terlebih dahulu sebelum dapat menandatangani Perjanjian Pemodal ini. Adanya Akun dan Tanda Tangan Elektronik Pemodal dalam Syarat dan Ketentuan dan Perjanjian Pemodal ini membuktikan bahwa Pemodal telah memahami, menerima dan menyetujui segala hal yang diatur dalam Syarat dan Ketentuan dan Perjanjian Pemodal ini.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            Bersedia untuk diawasi oleh Penyelenggara atas segala bentuk transaksi yang dilakukan oleh Pemodal, dilakukan proses autentikasi, verifikasi dan validasi yang mendukung kenirsangkalan (tidak dapat disangkalnya) dalam mengakses, memproses dan mengeksekusi Data Pribadi, data transaksi dan data keuangan Pemodal yang dikelola oleh Penyelenggara dan pihak ketiga yang telah bekerja sama dengan Penyelenggara terkait dengan <em>Project Funding</em> berdasarkan Perjanjian Pemodal ini.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            Menjamin dan bersedia untuk diverifikasi oleh Penyelenggara guna memastikan dana milik Pemodal yang digunakan dalam investasi di <em>Project Funding</em> adalah memang benar dana milik Pemodal dan bukan diperoleh dari tindakan yang melanggar peraturan perundang-undangan, termasuk di antara lain korupsi, penggelapan, pencurian, ataupun pencucian uang ataupun Pendanaan dibidang Pertanian, Peternakan dan Perikanan dari dan/atau untuk tindakan terorisme.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            Pemodal memberikan kuasa ke Penyelenggara terhadap administrasi rekening efek atas nama Pemodal termasuk namun tidak terbatas untuk melakukan pemindah bukuan efek dan/atau dana dalam rangka transaksi <em>Project Funding</em> atau kepentingan lain atas nama Pemodal.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            Pemodal memahami semua risiko investasi yang dapat terjadi pada proyek yang diinvestasikan.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            Pemodal, penyelenggara, dan pelaku usaha akan menanggung risiko investasi yang terjadi apabila terjadi <em>Force Majeure</em>, dalam jangka waktu 3 hari semua pihak bertemu dan membicarakan pemecahannya secara musyawarah untuk mencapai mufakat.
                                                        </p>
                                                    </li>
                                                </ol>
                                            </li>
                                        </ol>
                                    </li>
                                    <li>
                                        Hak dan Kewajiban Penyelenggara
                                        <ol style="list-style-type: lower-latin">
                                            <li>
                                                Hak
                                                <ol style="list-style-type: lower-roman">
                                                    <li>
                                                        <p>
                                                            Dalam hal Penyelenggara melakukan pembatalan penawaran Pendanaan dibidang Pertanian, Peternakan dan Perikanan  sebelum masa penawaran paling lama sesuai yang ditawarkan pada <em>Project Funding</em>, maka Pemodal membebaskan Penyelenggara atas suatu biaya lainnya jika ada.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            Penyelenggara berhak untuk melakukan kerja sama dan pertukaran data dengan penyelenggara layanan pendukung berbasis Teknologi Informasi dan pihak ketiga yang telah bekerja sama dengan Penyelenggara dalam rangka meningkatkan kualitas <em>Project Funding</em> berdasarkan Perjanjian Pemodal ini, namun dengan memperhatikan kewajiban Penyelenggara untuk merahasiakan data yang akan diberikan kepada penyelenggara layanan pendukung berbasis Teknologi Informasi dan pihak ketiga yang telah bekerja sama dengan Penyelenggara.
                                                        </p>
                                                    </li>
                                                </ol>
                                            </li>
                                            <li>
                                                Kewajiban
                                                <ol style="list-style-type: lower-roman">
                                                    <li>
                                                        <p>
                                                            Wajib untuk melaksanakan review terhadap Pemodal dan Pelaku Usaha, dari segi legalitas, dokumentasi dan informasi yang wajib dipenuhi oleh Pemodal dan Pelaku Usaha sesuai dengan peraturan Otoritas Jasa Keuangan, termasuk kewajiban untuk menggunggah dokumen dan/atau informasi tersebut secara online di Platform.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            Memuat dan memperbaharui informasi dalam Platform dalam hal terdapat perubahan material yang dapat mempengaruhi keputusan investasi Pemodal terkait dengan Pasal 4 Angka 2 Huruf b Butir (i) di atas paling lambat 2 (dua) Hari Kerja setelah terjadinya perubahan material.

                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            Menginformasikan kepada Pemodal mengenai penerimaan dan penggunaan dana investasi dan Saldo yang diinvestasikan oleh Pemodal, termasuk pengkinian atas dana investasi dan/atau Saldo Akun.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            Menginformasikan kepada Pemodal atas pelanggaran yang dilakukan Pelaku Usaha selama masa penawaran dan pelanggaran atas kewajiban Pelaku Usaha yang berkaitan langsung dengan berakhirnya masa penawaran setelah adanya konfirmasi dari Otoritas Jasa Keuangan terkait atas pelanggaran dimaksud.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            Menyediakan dan/atau menyampaikan dan/atau mengunggah informasi kepada Pemodal di Platform mengenai <em>Project Funding</em>, termasuk mengenai penerimaan, penundaan atau penolakan permohonan <em>Project Funding</em>, termasuk alasan penundaan dan penolakan dimaksud, secara akurat, jujur, jelas dan tidak menyesatkan.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            Memuat dalam Platform Penyelenggara mengenai risiko, setidaknya meliputi risiko usaha, investasi, likuiditas, kelangkaan pembagian dividen, dilusi kepemilikan Pendanaan dibidang Pertanian, Peternakan dan Perikanan  dan kegagalan Sistem Elektronik.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            Memiliki sistem untuk memastikan hanya Pemodal yang telah memberikan konfirmasi mengenai pemenuhan persyaratan Pemodal yang dapat berinvestasi melalui <em>Project Funding</em>.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            Memuat dalam Platform mengenai biaya dan pengeluaran lainnya yang dikenakan atau dibebankan kepada Pemodal.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            Mempunyai mekanisme pengembalian dana dalam hal penawaran Pendanaan dibidang Pertanian, Peternakan dan Perikanan  melalui <em>Project Funding</em> batal demi hukum.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            Wajib memiliki sumber daya manusia yang memiliki keahlian dan/atau latar belakang di bidang Teknologi Informasi ataupun keahlian dalam melakukan review terhadap Pelaku Usaha.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            Memberikan laporan kepada Pemodal terkait kondisi Pendanaan dibidang Pertanian, Peternakan dan Perikanan  investasi Pemodal baik secara berkala ataupun secara insidentil.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            Mempunyai pengamanan dan mitigasi risiko atas pelaksanaan <em>Project Funding</em>, termasuk terkait dengan teknologi informasi, pusat data dan pusat pemulihan bencana.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            Penyelenggara wajib menyediakan cara pembayaran melalui bank yang bersifat unik untuk setiap Pemodal yang melakukan Pendanaan dibidang Pertanian, Peternakan dan Perikanan  melalui <em>Project Funding</em>.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            Wajib menjaga kerahasiaan, keutuhan dan ketersediaan Data Pribadi, data transaksi dan data keuangan yang dikelola Penyelenggara sejak data diperoleh hingga data tersebut dimusnahkan.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            Memastikan tersedianya proses autentikasi, verifikasi, dan validasi yang mendukung kenirsangkalan dalam mengakses, memproses, dan mengeksekusi Data Pribadi, data transaksi, dan data keuangan yang dikelola Penyelenggara
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            Menjamin bahwa perolehan, penggunaan, pemanfaatan, dan pengungkapan Data Pribadi, dan data keuangan yang diperoleh oleh Penyelenggara berdasarkan persetujuan pemilik Data Pribadi, data transaksi dan data keuangan, kecuali ditentukan lain oleh ketentuan perundang-undangan. Sehubungan dengan ketentuan ini, maka Pemodal berhak untuk melakukan pembatalan atau perubahan sebagian persetujuan atas pengungkapan data dan/atau informasi miliknya yang sudah diberikan sebelumnya kepada Penyelenggara secara elektronik dalam bentuk Dokumen Elektronik.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            Menyediakan media komunikasi lain selain Sistem Elektronik <em>Project Funding</em> untuk memastikan kelangsungan layanan Pemodal yang dapat berupa surat elektronik, <em>call center</em>, atau media komunikasi lainnya.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            Memberitahukan secara tertulis kepada pemilik Data Pribadi, data transaksi, dan data keuangan tersebut, jika terjadi kegagalan dalam perlindungan kerahasiaan Data Pribadi, data transaksi dan data keuangan yang dikelola oleh Penyelenggara.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            Penyelenggara wajib menyediakan rekam jejak audit terhadap seluruh kegiatannya di dalam Sistem Elektronik <em>Project Funding</em>, termasuk memastikan perangkat sistem Teknologi Informasi yang dipergunakan mendukung penyediaan rekam jejak audit guna keperluan pengawasan, penegakan hukum, penyelesaian sengketa, verifikasi, pengujian dan pemeriksaan lainnya.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            Penyelenggara wajib melaporkan setiap pengaduan Pengguna disertai dengan tindak lanjut penyelesaian pengaduan dimaksud kepada Otoritas Jasa Keuangan.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            Penyelenggara wajib memiliki catatan secara terpisah detil kepemilikan dana untuk setiap Pemodal yang disimpan dalam Rekening Penampungan.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            Dana Pemodal dalam rekening atas nama Penyelenggara merupakan dana milik masing- masing Pemodal, dan bukan merupakan aset milik Penyelenggara, serta tidak dapat dijadikan harta pailit dalam hal Penyelenggara dinyatakan pailit sesuai peraturan perundang-undangan yang berlaku.
                                                        </p>
                                                    </li>
                                                </ol>
                                            </li>
                                        </ol>
                                    </li>
                                </ol>
                                <p class="text-center">
                                    <strong>
                                        PASAL 4<br/>
                                        HARGA PENDANAAN DIBIDANG PERTANIAN, PETERNAKAN DAN PERIKANAN
                                    </strong>
                                </p>
                                <ol style="list-style-type: decimal">
                                    <li>
                                        <p>
                                            Harga Pendanaan dibidang Pertanian, Peternakan dan Perikanan  akan ditentukan dan diinformasikan oleh Penyelenggara kepada Pemodal di Platform yang dapat berubah dari waktu ke waktu.
                                        </p>
                                    </li>
                                </ol>
                                <p class="text-center">
                                    <strong>
                                        PASAL 5<br/>
                                        PAJAK
                                    </strong>
                                </p>
                                <p>
                                    Pemodal akan melaporkan pajak masing-masing pada SPT tahunan.
                                </p>
                                <p class="text-center">
                                    <strong>
                                        PASAL 6<br/>
                                        PERNYATAAN DAN JAMINAN
                                    </strong>
                                </p>
                                <ol start="list-style-type: decimal">
                                    <li>
                                        Penyelenggara dilarang untuk:
                                        <ol style="list-style-type: lower-latin">
                                            <li>
                                                <p>
                                                    Memiliki hubungan afiliasi dengan Pelaku Usaha yang menggunakan <em>Project Funding</em>;
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    Memberikan bantuan keuangan kepada Pemodal untuk berinvestasi pada Pendanaan dibidang Pertanian, Peternakan dan Perikanan  Penerbit yang menggunakan <em>Project Funding</em>;
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    Memberikan nasihat investasi dan/atau rekomendasi kepada Pemodal dan/atau calon Pemodal untuk berinvestasi pada Pelaku Usaha;
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    Memberikan hadiah/kompensasi kepada pihak yang memberikan informasi mengenai Pemodal potensial;
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    Menerima dan/atau menyimpan dana Pemodal;
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    Memberikan perlakuan yang berbeda kepada setiap Pengguna;
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    Mempublikasikan	informasi yang tidak benar terkait	<em>Project Funding</em> yang diselenggarakan;
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    Melakukan penawaran <em>Project Funding</em> kepada Pengguna dan/atau masyarakat melalui sarana komunikasi pribadi tanpa persetujuan Pengguna; dan
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    Mengenakan biaya apapun kepada Pengguna atas pengajuan pengaduan.
                                                </p>
                                            </li>
                                        </ol>
                                    </li>
                                    <li>
                                        Para Pihak telah mengerti, memahami dan menerima adanya ketentuan yang disyaratkan oleh Otoritas Jasa Keuangan dan dicantumkan oleh Penyelenggara di Platform terkait dengan pemasaran suatu Pendanaan dibidang Pertanian, Peternakan dan Perikanan  yang diterbitkan oleh Penerbit berupa:
                                        <ol style="list-style-type: lower-latin">
                                            <li>
                                                <p>
                                                    “OTORITAS JASA KEUANGAN TIDAK MEMBERIKAN PERNYATAAN MENYETUJUI ATAU TIDAK MENYETUJUI EFEK INI, TIDAK JUGA MENYATAKAN KEBENARAN ATAU KECUKUPAN INFORMASI DALAM PROJECT FUNDING INI. SETIAP PRNYATAAN YANG BERTENTANGAN DENGAN HAL TERSEBUT ADALAH PERBUATAN MELANGGAR HUKUM.”;
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    “INFORMASI DALAM <em>PROJECT FUNDING</em> INI PENTING DAN PERLU MENDAPAT PERHATIAN SEGERA. APABILA TERDAPAT KERAGUAN PADA TINDAKAN YANG AKAN DIAMBIL, SEBAIKNYA BERKONSULTASI DENGAN PENYELENGGARA”; dan
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    “PELAKU USAHA DAN PENYELENGGARA, BAIK SENDIRI-SENDIRI MAUPUN BERSAMA-SAMA, BERTANGGUNG JAWAB SEPENUHNYA ATAS KEBENARAN SEMUA INFORMASI YANG TERCANTUM DALAM <em>PROJECT FUNDING INI</em>”.
                                                </p>
                                            </li>
                                        </ol>
                                    </li>
                                    <li>
                                        <p>
                                            Penyelenggara wajib menerapkan program anti pencucian uang dan pencegahan Pendanaan dibidang Pertanian, Peternakan dan Perikanan terorisme di sektor jasa keuangan terhadap Pengguna sesuai dengan ketentuan peraturan perundang- undangan mengenai penerapan program anti pencucian uang dan pencegahan Pendanaan dibidang Pertanian, Peternakan dan Perikanan  terorisme.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Masing-masing Pihak menyatakan dan menjamin bahwa Pihak tersebut, termasuk wakil/kuasanya, maupun direktur, komisaris dan karyawannya ataupun pihak terkait, apabila ada, tidak mempunyai ataupun menjaga dari kemungkinan terjadinya perbenturan kepentingan (<em>conflict of interest</em>) dengan Pihak lainnya, ataupun pihak ketiga lainnya.
                                        </p>
                                    </li>
                                </ol>
                                <p class="text-center">
                                    <strong>
                                        PASAL 7<br/>
                                        KUASA
                                    </strong>
                                </p>
                                <p>
                                    Perjanjian Pemodal ini juga mengatur adanya pemberian kuasa dari Pemodal kepada Penyelenggara untuk bertindak mewakili Pemodal sebagai pemegang dana Pelaku Usaha.
                                </p>
                                <p>
                                    Sehubungan dengan hal tersebut, maka berdasarkan Perjanjian Pemodal ini Pemodal memberikan kuasa kepada Penyelenggara, bertindak untuk dan atas nama serta mewakili Pemodal.
                                </p>
                                <p class="text-center">
                                    <strong>
                                        PASAL 8<br/>
                                        KEJADIAN KELALAIAN
                                    </strong>
                                </p>
                                <ol style="list-style-type: decimal">
                                    <li>
                                        <p>
                                            Kejadian kelalaian timbul apabila salah satu atau lebih dari kejadian-kejadian berikut ini:
                                        </p>
                                        <ol style="list-style-type: lower-latin">
                                            <li>
                                                <p>
                                                    Masing-masing Pihak tidak memenuhi kewajibannya dan melanggar ketentuan-ketentuan yang diatur dalam Perjanjian Pemodal yang menyebabkan Perjanjian Pemodal ini tidak dapat dilaksanakan;
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    Pernyataan-pernyataan dan/atau jaminan-jaminan yang diberikan oleh masing-masing Pihak ternyata dikemudian hari diketahui tidak benar dan yang tidak dapat diperbaiki serta mempunyai pengaruh terhadap Perjanjian Pemodal dan/atau pelaksanaan Perjanjian Pemodal ini;
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    Masing-masing Pihak mengajukan permohonan kepada instansi yang berwenang untuk dinyatakan pailit atau untuk diberikan penundaan membayar hutang-hutang atau bilamana orang/pihak lain mengajukan permohonan kepada instansi yang berwenang agar Pihak dimaksud dinyatakan dalam keadaan pailit;
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    Salah satu Pihak dibubarkan atau dilikuidasi atau menghentikan atau mengabaikan kegiatan operasional perusahaan;
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    Setiap kejadian, selain dari kejadian-kejadian yang diuraikan di atas, yang mempunyai pengaruh terhadap Perjanjian Pemodal dan/atau pelaksanaan dari Perjanjian Pemodal.
                                                </p>
                                            </li>
                                        </ol>
                                    </li>
                                </ol>
                                <p class="text-center">
                                    <strong>
                                        PASAL 9<br/>
                                        KEADAAN MEMAKSA
                                    </strong>
                                </p>
                                <ol style="list-style-type: decimal">
                                    <li>
                                        <p>
                                            Masing-masing Pihak tidak bertanggung jawab atas penundaan atau kegagalan dalam pelaksanaan kewajibannya berdasarkan Perjanjian Pemodal ini yang disebabkan oleh suatu keadaan yang memaksa, yaitu setiap peristiwa atau kejadian di luar kekuasaan manusia yang terbatas pada bencana alam, kebakaran, aksi mogok kerja, epidemi, peperangan atau huru-hara yang secara langsung dan nyata mempengaruhi kemampuan salah satu Pihak untuk memenuhi kewajibannya berdasarkan Perjanjian Pemodal ini.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Segala permasalahan yang timbul sebagai akibat dari adanya suatu keadaan memaksa akan diselesaikan terlebih dahulu secara musyawarah oleh Para Pihak.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Dalam hal terjadinya suatu keadaan memaksa, Para Pihak wajib memberitahukan secara tertulis mengenai terjadinya keadaan memaksa tersebut dengan menyampaikan bukti-bukti yang relevan kepada Pihak lainnya selambat-lambatnya 4 (empat) Hari Kalender terhitung sejak tanggal terjadinya keadaan memaksa yang dimaksud.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Keterlambatan atau kelalaian dalam memberitahukan terjadinya suatu keadaan memaksa mengakibatkan tidak diakuinya peristiwa tersebut sebagai suatu keadaan memaksa oleh Pihak lainnya.
                                        </p>
                                    </li>
                                </ol>
                                <p class="text-center">
                                    <strong>
                                        PASAL 10<br/>
                                        JANGKA WAKTU
                                    </strong>
                                </p>
                                <p>
                                    Perjanjian Pemodal ini berlaku dan mengikat bagi Para Pihak terhitung sejak Pemodal menyatakan persetujuan secara elektronik atas isi Perjanjian Pemodal ini sampai dengan Para Pihak sepakat untuk mengakhiri Perjanjian Pemodal ini secara tertulis dalam waktu selambat-lambatnya tidak terbatas.
                                </p>
                                <p class="text-center">
                                    <strong>
                                        PASAL 11<br/>
                                        BERAKHIRNYA PERJANJIAN PEMODAL
                                    </strong>
                                </p>
                                <ol style="list-style-type: decimal">
                                    <li>
                                        <p>
                                            Perjanjian Pemodal ini berakhir dalam hal terjadi salah satu kejadian sebagai berikut:
                                        </p>
                                        <ol style="list-style-type: lower-latin">
                                            <li>
                                                <p>
                                                    Diakhiri oleh Para Pihak berdasarkan kesepakatan tertulis.
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    Pengakhiran secara sepihak oleh salah satu Pihak dengan adanya pemberitahuan secara tertulis dalam waktu 30 (tiga puluh) Hari Kalender terlebih dahulu apabila terjadi Kejadian Kelalaian.
                                                </p>
                                            </li>
                                        </ol>
                                    </li>
                                    <li>
                                        <p>
                                            Para Pihak setuju dan sepakat untuk mengesampingkan dan menyatakan tidak berlakunya ketentuan Pasal 1266 dan 1267 Kitab Undang-undang Hukum Perdata (KUHPer), tetapi hanya sebatas ketentuan yang mensyaratkan proses pengadilan untuk mengakhiri Perjanjian Pemodal ini.
                                        </p>
                                        <p>
                                            Apabila pada saat Perjanjian Pemodal ini berakhir masih terdapat kewajiban-kewajiban yang belum diselesaikan oleh masing-masing Pihak, maka ketentuan dalam Perjanjian Pemodal ini berlaku sampai diselesaikannya kewajiban tersebut oleh masing-masing Pihak.
                                        </p>
                                    </li>
                                </ol>
                                <p class="text-center">
                                    <strong>
                                        PASAL 12<br/>
                                        HUKUM YANG MENGATUR DAN PENYELESAIAN PERSELISIHAN
                                    </strong>
                                </p>
                                <ol style="list-style-type: decimal">
                                    <li>
                                        <p>
                                            Perjanjian Pemodal ini penafsiran dan pelaksanaannya serta segala akibat yang ditimbulkannya diatur dan tunduk pada hukum Negara Republik Indonesia.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Setiap perselisihan yang timbul antara Pemodal dan Penyelenggara atas pelaksanaan Perjanjian Pemodal ini maka Para Pihak setuju untuk menyelesaikannya terlebih dahulu secara musyawarah untuk mufakat dalam waktu 30 (tiga puluh Hari Kalender). Apabila perselisihan tidak dapat diselesaikan dalam jangka waktu dimaksud maka Para Pihak dengan ini sepakat untuk menyelesaikannya melalui Badan Arbitrase Nasional Indonesia (untuk selanjutnya disebut sebagai <strong>“BANI”</strong>) dengan menggunakan mekanisme atau hukum acara yang berlaku di BANI.
                                        </p>
                                    </li>
                                </ol>
                                <p class="text-center">
                                    <strong>
                                        PASAL 13<br/>
                                        HAK KEKAYAAN INTELEKTUAL
                                    </strong>
                                </p>
                                <ol style="list-style-type: decimal">
                                    <li>
                                        <p>
                                            Seluruh kepemilikan dan hak kekayaan intelektual suatu Pihak atas spesifikasi, gambar, cetak ulang, rancangan atau karya seni yang disediakan dan/atau dibuat untuk pelaksanaan Perjanjian Pemodal, pekerjaan pencetakan, informasi atau data teknis dan setiap informasi lain (termasuk, namun tidak terbatas pada, informasi yang terkait dengan bisnis masing-masing Pihak atau anak perusahaan atau afiliasinya) (secara keseluruhan disebut sebagai <strong>“Informasi”</strong>) yang dibuat dan diserahkan oleh salah satu Pihak kepada Pihak lain setiap saat tetap menjadi milik Pihak dimaksud.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Informasi milik suatu Pihak yang diserahkan oleh Pihak tersebut kepada Pihak lain sehubungan dengan Perjanjian Pemodal ini maka akan dijaga kerahasiaannya oleh Pihak lain (termasuk setiap dari para pejabat, karyawan atau agennya) dan Pihak lain tidak akan mengungkapkan atau membuka atau menyerahkan kepada pihak ketiga dan Informasi yang diterima dimaksud akan dikembalikan atas permintaan Pihak pemilik Informasi dengan biaya yang ditanggung sepenuhnya oleh Pihak lain.
                                        </p>
                                        <p>
                                            Informasi hanya digunakan untuk pelaksanaan Perjanjian Pemodal ini dan tidak boleh digunakan untuk tujuan lain kecuali disepakati oleh Para Pihak secara tertulis. Terutama, hak kekayaan intelektual yang terdapat dalam rancangan, alat, pola, gambar, data, informasi dan peralatan yang diserahkan oleh suatu Pihak pemilik hak kekayaan intelektual kepada Pihak lain berdasarkan Perjanjian Pemodal ini, maka hak eksklusif untuk penggunaan dan reproduksi atas hak kekayaan intelektual adalah milik Pihak pemilik hak kekayaan intelektual dimaksud sepenuhnya, tanpa adanya kewajiban atas royalti dan/atau suatu pembayaran lain kepada Pihak lain. Adanya pelanggaran atas ketentuan ini yang dilakukan oleh suatu Pihak akan memberikan hak ganti rugi kepada Pihak yang mengalami kerugian.
                                        </p>
                                    </li>
                                </ol>
                                <p class="text-center">
                                    <strong>
                                        PASAL 14<br/>
                                        KORESPONDENSI
                                    </strong>
                                </p>
                                <ol style="list-style-type: decimal">
                                    <li>
                                        <p>
                                            Setiap pemberitahuan, pernyataan, informasi, komunikasi atau korespondensi yang dilakukan oleh Para Pihak berdasarkan Perjanjian Pemodal ini harus dibuat secara tertulis dan disampaikan langsung dan dikirimkan melalui pos tercatat, atau kurir (ekspedisi) ke alamat-alamat sebagai berikut
                                        </p>
                                        <p>
                                            Penyelenggara<br/>
                                            <strong>PT. Inspira Karya Teknologi Nusantara</strong><br/>
                                            Alamat:<br/>
                                            Jl. Shinta 22 Purwosari<br/>
                                            Kroyo, Kec. Karangmalang<br/>
                                            Kabupaten Sragen 57221<br/>
                                            Surel:<br/>
                                            support@makarya.in
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Setiap pemberitahuan dan komunikasi ke masing-masing Pihak tersebut di atas, dianggap telah diterima atau disampaikan:
                                        </p>
                                        <ol style="list-style-type: lower-latin">
                                            <li>
                                                <p>
                                                    Pada hari yang sama apabila diserahkan langsung dan dibuktikan dengan tandatangan penerimaan pada buku pengantar surat (ekspedisi) atau tanda terima lain yang diterbitkan oleh pengirim.
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    Pada hari ke-5 (lima), apabila dikirim per pos dan dibuktikan dengan resi pengiriman pos tercatat.
                                                </p>
                                            </li>
                                        </ol>
                                    </li>
                                    <li>
                                        <p>
                                            Pembatalan/perubahan alamat berlaku jika pembatalan/perubahan secara tertulis telah diterima oleh Pihak lainnya dalam waktu 7 (tujuh) Hari Kerja sejak terjadinya pembatalan/perubahan tersebut, sehingga segala akibat keterlambatan pemberitahuan menjadi tanggungjawab Pihak yang melakukan perubahan tersebut.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Pihak yang mengirimkan surat dan/atau paket wajib menanggung dan membayar semua ongkos yang timbul karenanya.
                                        </p>
                                    </li>
                                </ol>
                                <p class="text-center">
                                    <strong>
                                        PASAL 15<br/>
                                        LAIN-LAIN
                                    </strong>
                                </p>
                                <ol style="list-style-type: decimal">
                                    <li>
                                        <p style="text-decoration: underline">
                                            Keseluruhan Perjanjian
                                        </p>
                                        <p>
                                            Perjanjian Pemodal ini merupakan perwujudan dari keseluruhan perjanjian dan/atau kesepakatan antara Para Pihak berkenaan dengan materi yang diperjanjikan.
                                        </p>
                                        <p>
                                            Perjanjian Pemodal ini membatalkan dan menggantikan kesepakatan yang dibuat sebelumnya oleh Para Pihak baik yang dilakukan secara lisan maupun tertulis.
                                        </p>
                                    </li>
                                    <li>
                                        <p style="text-decoration: underline">
                                            Modifikasi dan Penambahan
                                        </p>
                                        <p>
                                            Tidak ada perubahan atau modifikasi atau penambahan dalam Perjanjian Pemodal ini yang sah atau mengikat Para Pihak kecuali dinyatakan secara tertulis dan ditandatangani oleh Para Pihak, baik secara dokumen maupun elektronik.
                                        </p>
                                    </li>
                                    <li>
                                        <p style="text-decoration: underline">
                                            Keberlakuan
                                        </p>
                                        <p>
                                            Jika salah satu atau lebih ketentuan yang terkandung dalam Perjanjian Pemodal ini menjadi tidak sah, tidak berlaku atau tidak dapat dilaksanakan, maka ketentuan-ketentuan lainnya dalam hal apapun juga tidak akan terpengaruh dan akan terus berlaku dan mengikat Para Pihak sepanjang tidak mengubah makna dan tujuan dari Perjanjian Pemodal ini.
                                        </p>
                                    </li>
                                    <li>
                                        <p style="text-decoration: underline">
                                            Independen
                                        </p>
                                        <p>
                                            Perjanjian Pemodal ini tidak boleh diinterpretasikan atau ditafsirkan sebagai menciptakan suatu asosiasi (association) atau perserikatan (partnership) atau hubungan keagenan antara prinsipal dengan agennya Para Pihak tetap merupakan pihak-pihak yang independen dan tetap mempunyai hak untuk melaksanakan usaha mereka untuk kepentingan mereka masing-masing.
                                        </p>
                                    </li>
                                    <li>
                                        <p style="text-decoration: underline">
                                            Pengalihan
                                        </p>
                                        <p>
                                            Salah satu Pihak tidak dapat mengalihkan Perjanjian Pemodal ini baik seluruhnya maupun sebagian kepada pihak ketiga manapun tanpa persetujuan tertulis terlebih dahulu dari Pihak lainnya tanpa adanya persetujuan tertulis dari Para Pihak.
                                        </p>
                                    </li>
                                    <li>
                                        <p style="text-decoration: underline">
                                            Lampiran
                                        </p>
                                        <p>
                                            Semua lampiran sehubungan dengan pelaksanaan Perjanjian Pemodal ini merupakan satu kesatuan dan bagian yang tidak terpisahkan dari Perjanjian Pemodal ini.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Para Pihak wajib mematuhi semua syarat-syarat yang dicantumkan di dalam Perjanjian Pemodal ini. Kelalaian salah satu Pihak di dalam mentaati atau melaksanakan isi dari Perjanjian Pemodal ini pada satu atau beberapa kali kejadian, tidak akan menghilangkan kewajiban Pihak dimaksud untuk tetap memenuhi segala persyaratan yang terdapat di dalam Perjanjian Pemodal ini.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Perjanjian Pemodal ini dapat disepakati oleh Para Pihak secara elektronik dan dapat dicetak dalam beberapa rangkap. Guna menghindari keragu-raguan atau kesalahpahaman diantara Para Pihak, maka versi terakhir atas Perjanjian Pemodal ini beserta Lampiranmya, adalah versi yang dicatatkan oleh Penyelenggara. Masing-masing rangkap mempunyai kekuatan hukum yang sama.
                                        </p>
                                    </li>
                                </ol>
                                <p>
                                    Demikian Perjanjian Pemodal ini dibuat dengan itikad baik oleh masing-masing Pihak, dan disetujui oleh wakil yang berwenang dari masing-masing Pihak di halaman tanda tangan yang disediakan oleh Penyelenggara untuk maksud itu. 
                                </p>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="agree">
                                    <label class="form-check-label" for="flexCheckDefault">
                                      Saya telah membaca dan menyetujui Syarat dan Ketentuan Makarya.
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="ttd" class="form-label">Unggah Tanda Tangan</label>
                                <input type="file" class="form-control" id="ttd" name="ttd">
                            </div>
                        </div>
                        <hr>
                        <div class="text-right">
                            <button class="btn btn-success" type="submit" disabled>Simpan</button>
                        </div>
                        <script>
                            var agree = $('#agree');
                            agree.on('change', function(){
                                if( agree.prop('checked') ){
                                    $('button[type="submit"]').removeAttr('disabled');
                                }else{
                                    $('button[type="submit"]').attr('disabled', '');
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@include('client._components.footer')
@endsection