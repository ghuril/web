@extends('layouts.app')

@section('content')
<div class="container d-flex flex-column justify-content-center align-items-center" style="min-height: 100vh; background-color: #111;">
    <div class="tab-content mt-4 w-100">
        <!-- Tab Content - Upload -->
        <div class="tab-pane fade show active" id="upload" role="tabpanel" aria-labelledby="uploadTab">
            <div class="upload-card p-5 rounded shadow-lg text-center" style="background: linear-gradient(145deg, #2d2d2d, #1a1a1a); border-radius: 20px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);">
                <h1 class="display-4 mb-4 text-white" style="font-family: 'Montserrat', sans-serif; font-weight: 600;">Upload File</h1>
                <p class="mb-4 text-muted" style="font-family: 'Roboto', sans-serif;">Silakan unggah foto atau file Anda di bawah ini.</p>

                <div class="upload-box">
                    <input type="file" id="fileInput" class="file-input" hidden accept="image/*" />
                    <label for="fileInput" class="file-label" style="cursor: pointer; padding: 20px; background: #333; color: #aaa; border-radius: 15px; border: 2px dashed #555; font-size: 16px; transition: background-color 0.3s;">
                        <i class="bi bi-cloud-arrow-up-fill" style="font-size: 24px; margin-right: 8px;"></i>
                        <span>Drag & Drop file atau klik untuk memilih gambar</span>
                    </label>
                </div>

                <!-- Image Preview -->
                <div id="imagePreview" class="mt-4" style="display: none;">
                    <h5 class="text-white">Pratinjau Gambar:</h5>
                    <img id="previewImg" src="" alt="Image Preview" class="img-fluid rounded" style="max-width: 100%; height: auto; border-radius: 15px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);" />
                    <button type="button" id="deleteBtn" class="btn btn-danger mt-3" style="border-radius: 50px; transition: background-color 0.3s;">Hapus Gambar</button>
                    <button type="button" id="addToGalleryBtn" class="btn btn-success mt-3" style="border-radius: 50px; transition: background-color 0.3s;">Tambahkan ke Galeri</button>
                </div>

                <div id="fileName" class="mt-3 text-muted"></div>
            </div>
        </div>

        <!-- Tab Content - Gallery -->
        <div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="galleryTab">
            <h2 class="text-center mb-4 text-white" style="font-family: 'Montserrat', sans-serif; font-weight: 600;">Galeri Gambar</h2>
            <div id="galleryImages" class="d-flex flex-wrap justify-content-center">
                <!-- Gambar yang sudah diunggah akan muncul di sini -->
            </div>
        </div>
    </div>

   <!-- Futuristic Navbar -->
<ul class="nav nav-tabs" id="uploadTabs" role="tablist" style="border-top: 2px solid #444; margin-top: 20px; background: linear-gradient(135deg, #3b3b3b, #222222); border-radius: 10px;">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="uploadTab" data-bs-toggle="tab" href="#upload" role="tab" aria-controls="upload" aria-selected="true" style="color: #eee; font-weight: 700; padding: 10px 20px; text-transform: uppercase; letter-spacing: 1px; transition: all 0.3s ease;">
            <span style="position: relative;">Unggah</span>
            <div class="futuristic-indicator"></div>
        </a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="galleryTab" data-bs-toggle="tab" href="#gallery" role="tab" aria-controls="gallery" aria-selected="false" style="color: #eee; font-weight: 700; padding: 10px 20px; text-transform: uppercase; letter-spacing: 1px; transition: all 0.3s ease;">
            <span style="position: relative;">Galeri</span>
            <div class="futuristic-indicator"></div>
        </a>
    </li>
</ul>

<style>
    /* Background gradient and hover effects */
    .nav-tabs {
        border: none;
        background: linear-gradient(135deg, #1a1a1a, #333);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
        border-radius: 15px;
        padding: 10px;
    }

    .nav-item .nav-link {
        color: #aaa;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        padding: 12px 20px;
        border-radius: 10px;
        position: relative;
        transition: all 0.3s ease;
    }

    .nav-item .nav-link:hover, .nav-item .nav-link.active {
        background-color: #444;
        color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 255, 0.5);
    }

    .nav-item .nav-link .futuristic-indicator {
        content: "";
        position: absolute;
        width: 100%;
        height: 2px;
        background: #0e76a8;
        bottom: 0;
        left: 0;
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }

    .nav-item .nav-link:hover .futuristic-indicator, .nav-item .nav-link.active .futuristic-indicator {
        transform: scaleX(1);
    }

    .nav-tabs .nav-item .nav-link.active {
        color: #00bcd4;
        font-weight: 800;
        background: #222;
        box-shadow: 0 0 15px rgba(0, 188, 212, 0.6);
    }

    .file-label:hover {
        background-color: #444;
    }

    .btn-danger:hover {
        background-color: #f56b6b;
    }

    .btn-success:hover {
        background-color: #6dbf6d;
    }

    .upload-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .upload-card:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
    }
</style>
@endsection
