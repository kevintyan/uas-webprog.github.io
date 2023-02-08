<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('items')->insert([
            [
                'item_name' => 'Kol atau Kubis',
                'item_desc' => 'Bagi Anda pecinta lalapan, tentu tak asing ya dengan sayuran jenis ini. Sayuran kol atau kubis memang tetap nikmat meski dikonsumsi mentah. Namun, kol juga dapat diolah dengan ditumis atau dicampur bersama sop. Terdapat beragam jenis kol yang bisa Anda temukan di pasaran, yaitu kol hijau, kol savoy, kol ungu atau kol napa.',
                'price' => 5000,
                'image_item' => 'item_image/img1.png'
            ],
            [
                'item_name' => 'Kol atau Kubis Napa',
                'item_desc' => 'Anda mungkin lebih mengenal sayuran jenis ini dengan sebutan sawi putih, ya. Padahal sayuran ini memiliki nama asli yaitu kol napa. Sayuran ini merupakan salah satu varietas kol karena susunan daunnya yang juga berlapis-lapis. Jika di Korea, kol napa populer dijadikan kimchi maka masyarakat Indonesia sering mengolah kol napa sebagai campuran sup, capcay, atau juga lalapan.',
                'price' => 6000,
                'image_item' => 'item_image/img2.png'
            ],
            [
                'item_name' => 'Brokoli dan Kembang Kol',
                'item_desc' => 'Meskipun berasal dari Italia, kini Anda dapat dengan mudah menemukan brokoli dan kembang kol di pasaran. Bagian yang dimakan dari kedua sayuran ini adalah bagian bunganya. Bedanya, brokoli memiliki bunga berwarna hijau, sementara kembang kol berwarna putih. Selain diolah sebagai makanan, brokoli dan kembang kol juga dapat dijadikan sebagai jus.',
                'price' => 12000,
                'image_item' => 'item_image/img3.png'
            ],
            [
                'item_name' => 'Sawi Caisim',
                'item_desc' => 'Ada begitu banyak jenis sawi yang dapat Anda temukan di Indonesia, lho. Salah satu yang paling populer adalah sawi caisim. Sawi caisim biasanya sering dijadikan sebagai bahan pelengkap pada masakan mie. Selain itu, sawi caisim juga dapat diolah dalam berbagai masakan, seperti tumisan hingga sayur berkuah.',
                'price' => 4000,
                'image_item' => 'item_image/img4.png'
            ],
            [
                'item_name' => 'Sawi Pahit atau Sawi Asin',
                'item_desc' => 'Sesuai namanya, sawi pahit memiliki rasa yang sedikit pahit sehingga jarang dikonsumsi. Oleh karena itu, sawi pahit sering diolah melalui proses pengasinan agar dapat menghilangkan rasa pahitnya. Sebagian orang mengenal sawi pahit dengan sebutan sawi asin. Biasanya sawi jenis ini banyak dijual di pasar tradisional.',
                'price' => 5000,
                'image_item' => 'item_image/img5.png'
            ],
            [
                'item_name' => 'Kailan',
                'item_desc' => 'Meskipun merupakan jenis sayuran baru yang hadir di Indonesia, tetapi kini kailan telah menjadi kegemaran bagi sebagian masyarakat. Bahkan kailan pun semakin banyak dibudidaya oleh petani. Memiliki cita rasa yang agak manis, legit, dan empuk di lidah, tumisan kailan cocok menjadi sajian keluarga Anda.',
                'price' => 8000,
                'image_item' => 'item_image/img6.png'
            ],
            [
                'item_name' => 'Bok Choy',
                'item_desc' => 'Bok choy juga dikenal dengan sebutan pakcoy. Meskipun awalnya sayur ini dibudidayakan di China, tapi kini pakcoy telah menyebar ke seluruh dunia terutama Indonesia. Bagi Anda yang ingin mencicipi pakcoy, Anda bisa mengolahnya dengan cara ditumis atau direbus dengan rempah-rempah sederhana. Pakcoy memiliki tekstur yang tetap renyah pada batangnya meskipun telah dimasak.',
                'price' => 15000,
                'image_item' => 'item_image/img7.png'
            ],
            [
                'item_name' => 'Daun Singkong',
                'item_desc' => 'Sayuran hijau ini sangat mudah dijumpai di pasaran. Daun singkong merupakan salah satu jenis sayuran yang dapat diolah menjadi berbagai masakan sederhana. Umumnya, sayuran ini sering dihidangkan di rumah makan padang.',
                'price' => 2000,
                'image_item' => 'item_image/img8.png'
            ],
            [
                'item_name' => 'Bayam Hijau',
                'item_desc' => 'Anda pasti sudah tidak asing lagi ya dengan sayuran yang satu ini? Bayam memang sangat mudah ditemukan dan diolah ke dalam aneka masakan. Di Indonesia, bayam hijau memiliki dua varian, yaitu bayam petik (daunnya lebar, besar, dan tumbuh tegak), dan bayam cabut (daunnya berukuran kecil, batangnya juga bisa dimakan). Biasanya bayam petik sering dijadikan campuran gado-gado, urap, atau pecel. Sedangkan bayam cabut sering diolah menjadi sayur bening.',
                'price' => 11000,
                'image_item' => 'item_image/img9.png'
            ],
            [
                'item_name' => 'Bayam Merah',
                'item_desc' => 'Sebagian besar orang kini sudah banyak yang mengenali bayam merah. Namun, ternyata masih ada yang belum terbiasa mengonsumsinya. Bayam merah dapat diolah menjadi lalapan, hingga salad, dan sayur bening.',
                'price' => 20000,
                'image_item' => 'item_image/img10.png'
            ],
            [
                'item_name' => 'Kangkung',
                'item_desc' => 'Sama seperti bayam, kangkung juga termasuk sayuran yang sangat mudah ditemukan di pasaran. Kangkung juga dapat diolah menjadi aneka masakan. Bahkan di Lombok, ada menu khas plecing kangkung yang  disajikan dengan sambal tomat terasi.',
                'price' => 3000,
                'image_item' => 'item_image/img11.png'
            ],
            [
                'item_name' => 'Kenikir',
                'item_desc' => 'Kenikir memiliki nama lain yaitu ulam raja. Sayuran ini dipercaya dapat digunakan sebagai penyedap atau penambah nafsu makan. Di Jawa biasanya mengolah daun kenikir muda sebagai campuran pecel.',
                'price' => 8000,
                'image_item' => 'item_image/img12.png'
            ],
            [
                'item_name' => 'Daun Katuk',
                'item_desc' => 'Bagi Anda yang sedang menyusui, tentu sangat mengenal sayuran ini. Ya, daun katuk memang dikenal memiliki kandungan yang berkhasiat memperlancar air susu ibu selama masa menyusui. Sama dengan sayuran hijau lainnya, daun katuk juga bisa diolah menjadi sebuah masakan. Bisanya, daun katuk sering dibuat sayur bening.',
                'price' => 7000,
                'image_item' => 'item_image/img13.png'
            ],
            [
                'item_name' => 'Genjer',
                'item_desc' => 'Bagi Anda yang tinggal diperkotaan, sayuran ini mungkin masih terlihat asing karena genjer tumbuh di areal persawahan. Meskipun begitu, genjer sudah menjadi sayur favorit sebagian masyarakat. Genjer dapat diolah menjadi lalapan atau ditumis seperti kangkung. Anda bisa membeli sayur ini di pasar-pasar tradisional.',
                'price' => 6000,
                'image_item' => 'item_image/img14.png'
            ],
            [
                'item_name' => 'Kacang Panjang',
                'item_desc' => 'Sayuran hijau yang banyak ditemukan di Indonesia berikutnya adalah kacang panjang. Biasanya kacang panjang sering dimasak dengan cara ditumis atau dibuat lalapan.',
                'price' => 4000,
                'image_item' => 'item_image/img15.png'
            ],
        ]);
    }
}
