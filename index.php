    <html>
	<head>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	<body>
	<div class="container" style="margin-top: 50px">
        <h1>Tulis Buku Tamu!</h1>
        <hr />
        
        <form class="form-horizontal" method="post" action="post.php">
            <div class="form-group">
                <label class="col-sm-2 control-label">NAMA LENGKAP</label>
                <div class="col-sm-4">
                    <input type="text" name="nama" class="form-control" placeholder="your_name">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">EMAIL</label>
                <div class="col-sm-4">
                    <input type="email" name="email" class="form-control" placeholder="support@mail.net" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">WEBSITE</label>
                <div class="col-sm-4">
                    <input type="url" name="website" class="form-control" placeholder="http://www.website.net">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">ISI PESAN</label>
                <div class="col-sm-8">
                    <textarea name="pesan" class="form-control" placeholder="Hai, saya sangat senang dengan tutorial yang ada di tutorialpedia.net. Terima kasih." required></textarea>
                </div>
            </div>
			<div class="g-recaptcha" data-sitekey="6LfMUIkUAAAAADPmANYW16TUT57NCZP-iJL5rQqI"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-8">
                    <input type="submit" name="submit" class="btn btn-primary" value="KIRIM PESAN">
                </div>
            </div>
        </form>
</body>
</html>