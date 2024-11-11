<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Tabs Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ url('/') }}">Galeri Sekolah</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('upload') }}">Upload</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kategori') }}">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('galeri') }}">Galeri</a>
                    </li>
                </ul>
            </div>
        </nav>

        @yield('content')

         <!-- Bootstrap JS, Popper.js, and jQuery (if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

    <script>
    // Mengambil elemen input dan tempat untuk menampilkan pratinjau gambar
    document.getElementById('fileInput').addEventListener('change', function(event) {
        const file = event.target.files[0];
        
        // Menampilkan nama file yang dipilih
        const fileName = file ? file.name : 'Tidak ada file yang dipilih';
        document.getElementById('fileName').textContent = fileName;

        // Jika ada file dan file adalah gambar
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            
            // Ketika gambar sudah dibaca
            reader.onload = function(e) {
                // Menampilkan pratinjau gambar
                document.getElementById('imagePreview').style.display = 'block';
                document.getElementById('previewImg').src = e.target.result;
            };
            
            // Membaca file gambar
            reader.readAsDataURL(file);
        } else {
            // Jika file yang dipilih bukan gambar
            document.getElementById('imagePreview').style.display = 'none';
        }
    });

    // Fitur untuk menghapus gambar pratinjau
    document.getElementById('deleteBtn').addEventListener('click', function() {
        // Reset input file
        document.getElementById('fileInput').value = '';
        
        // Menyembunyikan pratinjau gambar dan nama file
        document.getElementById('imagePreview').style.display = 'none';
        document.getElementById('fileName').textContent = '';
    });

    // Fitur untuk menambahkan gambar ke galeri
    document.getElementById('addToGalleryBtn').addEventListener('click', function() {
        const imgSrc = document.getElementById('previewImg').src;
        
        // Membuat elemen gambar baru
        const newImage = document.createElement('div');
        newImage.classList.add('image-container');
        
        const img = document.createElement('img');
        img.src = imgSrc;
        img.classList.add('img-fluid', 'rounded', 'm-2');
        img.style.width = '200px';

        // Membuat tombol delete untuk gambar
        const deleteBtn = document.createElement('button');
        deleteBtn.classList.add('btn', 'btn-danger', 'mt-2');
        deleteBtn.textContent = 'Hapus';
        
        // Menambahkan event listener untuk menghapus gambar
        deleteBtn.addEventListener('click', function() {
            newImage.remove(); // Menghapus div image-container yang berisi gambar dan tombol delete
        });

        // Menambahkan gambar dan tombol delete ke dalam div container
        newImage.appendChild(img);
        newImage.appendChild(deleteBtn);
        
        // Menambahkan gambar dan tombol ke galeri
        const gallery = document.getElementById('galleryImages');
        gallery.appendChild(newImage);

        // Reset input file dan pratinjau gambar setelah menambahkan ke galeri
        document.getElementById('fileInput').value = '';
        document.getElementById('imagePreview').style.display = 'none';
        document.getElementById('fileName').textContent = '';
    });
</script>







    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
