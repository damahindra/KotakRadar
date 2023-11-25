<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/tambahsurat.css'); }}">
    <title>Tambah Surat</title>
</head>
<body>
<section class="contact-us" id="contact-section">
    <form id="contact" action="" method="post">

      <div class="section-heading">
        <h4>Kotak Surat</h4>
      </div>

      <div class="inputField">
        <input type="tujuan" name="tujuan" id="tujuan" placeholder="Tujuan" autocomplete="on" required>
        <span class="valid_info_name"></span>
      </div>

      <div class="inputField">
        <input type="topik" name="topik" id="topik" placeholder="Topik" required="" />
        <span class="valid_info_email"></span>
      </div>

      <div class="inputField">
        <textarea name="kritik" id="kritik" placeholder="Kritik"></textarea>
        <span class="valid_info_message"></span>
      </div>

      <div class="inputField btn">
        <button onclick="window.location.href='/kotaksurat'" type="submit" id="form-submit" class="main-gradient-button">Kirim kritik</button>
      </div>

    </form>
  </section>
</body>
</html>
