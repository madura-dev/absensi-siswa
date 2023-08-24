<div>
    <!-- He who is contented is rich. - Laozi -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        {{$pretitle}}
                    </div>
                    <h2 class="page-title">
                        {{$title}}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="d-print-none col-auto ms-auto">
                    <div class="btn-list">
                        {{$slot}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
