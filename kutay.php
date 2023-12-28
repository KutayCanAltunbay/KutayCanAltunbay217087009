<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "iletisim"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("baglanti hatasi: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO table1 (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Basariyla Kaydedildi";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kutay Can Altunbay - CV</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        img {
            border-radius: 50%;
            max-width: 150px;
            height: auto;
            display: block;
            margin: 20px auto;
        }

        h1, h2, p {
            text-align: center;
        }

        ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        li {
            display: inline-block;
            margin: 0 10px;
        }

        a {
            text-decoration: none;
            color: #333;
            transition: color 0.3s;
        }

        a:hover {
            color: #007BFF;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            bottom: 0;
            width: 100%;
        }

        .social-icons {
            margin-top: 10px;
        }

        .social-icons a {
            display: inline-block;
            margin: 0 10px;
            font-size: 20px;
            color: #fff;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #007BFF;
        }

        .iletisim h2 {
            font-size: xx-large;
            color: #B80000
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label, input, textarea {
            display: block;
            margin-bottom: 10px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }
    </style>
</head>

<body>

    <header>
        <h1>Kutay Can Altunbay</h1>
        <p>Computer Programmer</p>
    </header>

    <section>
        <img src="images/pp.jpg" alt="Profil Resmi">
        <h2>Hakkımda</h2>
        <p>Ben Kutay Can Altunbay, bilgisayar programcılığı alanında bir mezun olarak edindiğim teknik becerileri ve yaratıcı düşünceyi bir araya getirerek, dijital dünyada benzersiz deneyimler yaratmaya odaklanan bir profesyonelim. Sosyal medya yönetimi, çekim, kurgu ve montaj gibi geniş bir yelpazede becerilere sahibim.

            Bilgisayar programcısı olarak, güçlü analitik yeteneklerim ve problem çözme becerilerimle karmaşık projeleri başarıyla yönetiyorum. Aynı zamanda, sosyal medya platformlarında etkileşimi artırmak ve marka bilinirliğini güçlendirmek için stratejik bir yaklaşım benimsemiş bir sosyal medya yöneticisiyim.
            
            Çekim, kurgu ve montaj konularında geniş bir deneyimim var ve yaratıcı projelerde çalışmak benim için bir tutku haline geldi. Hem teknik hem de sanatsal açıdan kendimi sürekli geliştirmeye ve yeni trendleri takip etmeye önem veriyorum. Proje yönetimi, takım çalışması ve iletişim becerilerimle her aşamada etkili bir işbirliği sağlamayı hedefliyorum.
            
            Gelişen dijital dünyada, teknolojiyle sanatı birleştirerek özgün ve etkileyici işler ortaya koymak benim için bir misyon. Sizinle birlikte çalışarak, bilgi birikimimi ve deneyimimi kullanarak projelerinizi daha da ileriye taşımak için sabırsızlanıyorum..</p>

        <h2>Eğitim</h2>
        <ul>
            <li>Toki Şehit Ozan Onur İlgen - Anadalolu Lisesi</li>
            <li>Toros Üniversitesi - Bilgisayar Programcılığı</li>
        </ul>

        <h2>İş Deneyimi</h2>
        <ul>
            <li>Çağın Medya Grubu - Yerel Basın - Mayıs 2021 / Nisan 2023</li>
            <li>Deep Prodüksiyon - Sosyal Medya Yönetimi - Aralık 2020 / 2023</li>
            <li>X Ofis Coworking - Sosyal Medya Yönetimi - Nisan 2021 / Eylül 2021</li>
            <li>Akademi Basketbol - Antrenör ve Spor Organizatörü - Eylül 2016 / Aralık 2018</li>
        </ul>

        <h2>Yetenekler</h2>
        <ul>
            <li>* Adobe Premier Pro</li>
            <li>* Adobe Photoshop</li>
            <li>* Adobe After Effects</li>
            <li>* Video ve Fotoğraf Çekimi</li>
            <li>* Problem Çözme</li>
            <li>* Detaylara Önem Verme</li>
            <li>* Haber, Metin, Tanıtım Yazarlığı</li>
            <li>* Grafik Tasarım</li>
            <li>* Sosyal Medya Yönetimi</li>
            <li>* İnsiyatif ve Sorumluluk Alma</li>
            <li>* İyi İletişim Kurabilme</li>
        </ul>

        <div class="iletisim">
            <h2>İletişim</h2>
            <form action="#" method="post">
                <label for="name">İsim:</label>
                <input type="text" id="name" name="name" required>
    
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
    
                <label for="message">Mesaj:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
    
                <button type="submit">Gönder</button>
            </form>
        </div>
    </section>

    <footer>
        <p>Email: kutaycanaltunbayy@gmail.com</p>
        <div class="social-icons">
            <a href="https://www.linkedin.com/in/kutay-can-altunbay-a05625228?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" target="_blank">LinkedIn</a>
            <a href="https://github.com/KutayCanAltunbay" target="_blank">GitHub</a>
        </div>
    </footer>

</body>
</html>