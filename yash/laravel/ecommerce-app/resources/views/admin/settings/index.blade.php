@extends('admin.app')

@section('title') {{ $pageTitle }} @endsection

@section('content')
<div class="app-title">
    <div>
        <h1><i class="bi bi-gear"></i> {{ $pageTitle }}</h1>
    </div>
</div>
@include('admin.partials.flash')
<div class="row user">
    <div class="col-md-3">
        <div class="tile p-0">
            <ul class="nav flex-column nav-tabs user-tabs">
                <li class="nav-item"><a class="nav-link active" href="#general" data-bs-toggle="tab">General</a></li>
                <li class="nav-item"><a class="nav-link" href="#site-logo" data-bs-toggle="tab">Site Logo</a></li>
                <li class="nav-item"><a class="nav-link" href="#footer-seo" data-bs-toggle="tab">Footer &amp; SEO</a></li>
                <li class="nav-item"><a class="nav-link" href="#social-links" data-bs-toggle="tab">Social Links</a></li>
                <li class="nav-item"><a class="nav-link" href="#analytics" data-bs-toggle="tab">Analytics</a></li>
                <li class="nav-item"><a class="nav-link" href="#payments" data-bs-toggle="tab">Payments</a></li>
                <li class="nav-item"><a class="nav-link" href="#smtp" data-bs-toggle="tab">SMTP</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-9">
        <div class="tab-content">
            <div class="tab-pane active" id="general">
                @include('admin.settings.includes.general')
            </div>
            <div class="tab-pane fade" id="site-logo">
                @include('admin.settings.includes.logo')
            </div>
            <div class="tab-pane fade" id="footer-seo">
                @include('admin.settings.includes.footer_seo')
            </div>
            <div class="tab-pane fade" id="social-links">
                @include('admin.settings.includes.social_links')
            </div>
            <div class="tab-pane fade" id="analytics">
                @include('admin.settings.includes.analytics')
            </div>
            <div class="tab-pane fade" id="payments">
                @include('admin.settings.includes.payments')
            </div>
            <div class="tab-pane fade" id="smtp">
                @include('admin.settings.includes.smtp')
            </div>
        </div>
    </div>
</div>
@endsection