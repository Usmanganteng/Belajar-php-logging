<b>PENGENALAN PHP LOGGING</b>
---
> - PHP logging adalah proses mencatat informasi, peringatan, dan kesalahan saat menjalankan skrip PHP untuk memantau kinerja dan menemukan bug dalam aplikasi. Ini dilakukan dengan menulis pesan log ke file atau basis data.
---
<b>POINT UTAMA</b>
---
> #### Logging Library
> - Php sendiri sebenarnya memiliki function yang dikhususkan untuk php logging
> - Namun saat ini, kebanyakan orang tidak menggunakannya karena kurang flexible dan juga fiturnya yang sederhana
> 
> - [Berikut Adalah link library nya](https://www.php.net/manual/en/function.error-log.php)
---
> #### Logger
> - Logger adalah komponen atau fungsi dalam PHP yang digunakan untuk mencatat informasi, peringatan, kesalahan, atau kegiatan lainnya yang terjadi saat menjalankan skrip PHP.
> - Logger bertanggung jawab untuk menangkap pesan-pesan tersebut dan menulisnya ke media penyimpanan yang ditentukan, seperti file teks, basis data, atau sistem logging eksternal.
> - Logger menyediakan berbagai fungsi dan metode, seperti mencatat pesan log dengan tingkat keparahan yang berbeda, memformat pesan log, dan menentukan tempat penyimpanan log.
>
> - Berikut adalah contoh kode nya :
> ```
>   <?php
>
>   namespace MuhamadAldizarIlham\Belajar\PHP\MVC;
>   
>   use Monolog\Logger;
>   
>   class LoggerTest extends \PHPUnit\Framework\TestCase
>   {
>   public function testLogger()
>   {
>       $logger = new Logger("MuhamadAldizarIlham");
> 
>      self::assertNotNull($logger);
>   }
> 
>   public function testLoggerWithName()
>   {
>       $logger = new Logger(LoggerTest::class);
> 
>      self::assertNotNull($logger);
>   }
>   }
---
> #### Logging
> - Mencatat informasi, peringatan, kesalahan, atau aktivitas lain dalam suatu sistem atau aplikasi.
> - Memberikan wawasan tentang apa yang terjadi di dalam sistem, membantu memantau kinerja, mendeteksi masalah, dan memecahkan masalah yang mungkin terjadi.
> - Dengan menggunakan logging secara efektif, pengembang dapat memantau kinerja aplikasi, mendeteksi masalah dengan cepat, dan meningkatkan kualitas serta keandalan sistem mereka.
> - 
> - berikut adalah kode nya :
> ```
> <?php
>
> namespace MuhamadAldizarIlham\Belajar\PHP\MVC;
>
> use Monolog\Handler\StreamHandler;
> use Monolog\Logger;
> use Monolog\Test\TestCase;
>
> class LoggingTest extends TestCase
> {
>    public function testLogging()
>    {
>        $logger = new Logger(HandlerTest::class);
>
>        $logger->pushHandler(new StreamHandler("php://stderr"));
>        $logger->pushHandler(new StreamHandler(__DIR__ . "/../application.log"));
>
>        $logger->info("Belajar Pemrograman PHP Logging");
>        $logger->info("Selamat Datang di Muhamad Aldizar Ilham");
>        $logger->info("Ini Informasi Aplikasi Logging");
>
>        self::assertNotNull($logger);
>
>    }
>
>
>}
---
> #### Level
> - Level dalam PHP logging mengacu pada tingkat keparahan pesan log. Ini membantu mengelompokkan pesan-pesan log berdasarkan tingkat pentingnya:
> - DEBUG,INFO,WARNING,ERROR,CRITICAL,ALERT dan EMERGENCY
---
> #### Context
> - Context adalah informasi tambahan yang disertakan dalam pesan log untuk memberikan pemahaman lebih dalam tentang kejadian yang terjadi.
> - Context membantu pengembang dalam menganalisis dan memahami lebih lanjut tentang kejadian yang terjadi dalam sistem.
> - Menyertakan context dalam pesan log membantu pengembang dalam memahami konteks kejadian, yang berguna dalam pemecahan masalah, debugging, atau analisis kinerja aplikasi.
> - 
> - berikut adalah kode nya :
> ```
> <?php
>
> namespace MuhamadAldizarIlham\Belajar\PHP\MVC;
>
> use Monolog\Handler\StreamHandler;
> use Monolog\Logger;
> use Monolog\Test\TestCase;
>
> class ContextTest extends TestCase
> {
>    public function testContext()
>    {
>
>        $logger = new Logger(ContextTest::class);
>        $logger->pushHandler(new StreamHandler("php://stderr"));
>
>        $logger->info("This is log message", ["username" => "Aldizar"]);
>        $logger->info("Try login user", ["username" => "Aldizar"]);
>        $logger->info("Success login user", ["username" => "Aldizar"]);
>        $logger->info("Tidak ada context");
>
>        self::assertNotNull($logger);
>
>    }
>
> }
---
> #### Processor
> - Processor adalah komponen dalam sistem logging yang memproses pesan log sebelum penyimpanan atau pemrosesan lebih lanjut.
> - Processor dapat melakukan berbagai tugas, seperti mengubah format pesan log, menambah metadata, menyaring pesan log, atau mengenkripsi/dekripsi pesan log.
> - Penggunaan Processor dalam sistem logging PHP meningkatkan fleksibilitas dan efisiensi dalam pengelolaan pesan log, serta memungkinkan penyesuaian sesuai kebutuhan aplikasi.
> -
> - berikut adalah kode nya :
> ```
> <?php
>
> namespace MuhamadAldizarIlham\Belajar\PHP\MVC;
> 
> use Monolog\Handler\StreamHandler;
> use Monolog\Logger;
> use Monolog\Test\TestCase;
> 
> class ContextTest extends TestCase
> {
>     public function testContext()
>   {
>
>   $logger = new Logger(ContextTest::class);
>   $logger->pushHandler(new StreamHandler("php://stderr"));
>
>        $logger->info("This is log message", ["username" => "Aldizar"]);
>        $logger->info("Try login user", ["username" => "Aldizar"]);
>        $logger->info("Success login user", ["username" => "Aldizar"]);
>        $logger->info("Tidak ada context");
>
>        self::assertNotNull($logger);
>
>    }
>
>}
---
  <b>PERTANYAAN DAN CATATAN TAMBAHAN</b>
---
> - Tidak ada
---
  <b>KESIMPULAN</b>
---
> - PHP logging adalah proses penting dalam pengembangan perangkat lunak PHP yang mencatat informasi, peringatan, kesalahan, dan aktivitas lainnya dalam sistem. Dengan memantau kinerja aplikasi dan menganalisis aktivitas sistem, pengembang dapat mendeteksi masalah dan meningkatkan kualitas aplikasi. Konsep utama termasuk tingkat keparahan pesan, konteks untuk informasi tambahan, dan penggunaan processor untuk memproses pesan log. Dengan menerapkan praktik logging yang baik, pengembang dapat lebih efektif dalam pemecahan masalah dan meningkatkan kualitas aplikasi PHP mereka.
---
