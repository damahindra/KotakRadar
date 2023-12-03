<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ URL::asset('css/tambahsurat.css'); }}">
    <title>Tambah Surat</title>
</head>
<body>
<section class="contact-us" id="contact-section">
    <form id="contact" action="{{route('mail.perform')}}" method="POST">
      @csrf
      <div class="section-heading">
        <h4>Kotak Surat</h4>
      </div>

      <div class="inputField">
        <input type="tujuan" name="recipient" id="tujuan" placeholder="Tujuan" autocomplete="on" required>
        <span class="valid_info_name"></span>
      </div>

      <!-- <div class="inputField">
        <input type="topik" name="topic" id="topik" placeholder="Topik" required="" />
        <span class="valid_info_email"></span>
      </div> -->
      <div class="inputField">
        <select name="topic" id="topik">
            <option value="topik 1">Topik 1</option>
            <option value="topik 2">Topik 2</option>
            <option value="topik 3">Topik 3</option>
            <option value="topik 4">Topik 4</option>
        </select>
        <span class="valid_info_topic"></span>
      </div>

      <div class="inputField">
        <textarea name="content" id="kritik" placeholder="Kritik"></textarea>
        <span class="valid_info_message"></span>
      </div>

      <div class="inputField btn">
        <button onclick="window.location.href='/mail'" type="submit" id="form-submit" class="main-gradient-button">Kirim kritik</button>
      </div>

    </form>
  </section>
</body>
</html>
