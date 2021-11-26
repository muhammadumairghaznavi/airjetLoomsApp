<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>How to upload CSV</h3>
                <p class="text-subtitle text-muted"></p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>


    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Step By Step</h4>
            </div>
            <div class="card-body">
                <b>
                    <p>1. First unhide all columns</p>
                </b>
                <p><img src="{{ asset('images/instructions/1.png') }}" style="padding-left: 67px;" alt=""></p>
                <br>
                <b>
                    <p>2. Insert new blank column next to shiftname</p>
                </b>
                <p><img src="{{ asset('images/instructions/2.png') }}" style="padding-left: 67px;" alt=""></p>
                <br>
                <b>
                    <p>3. Break column (shiftname) by delimited (.), so that shiftname and date will be seperated</p>
                </b>
                <p><img src="{{ asset('images/instructions/3.png') }}" style="padding-left: 67px;" alt=""></p>

                <br>
                <b>
                    <p>4. Select and copy all data excluding last total row and same columns. (till BK) select (A2 - BK67)</p>
                </b>
                <p><img src="{{ asset('images/instructions/4.png') }}" style="padding-left: 67px; max-width: 1312px;" alt=""></p>

                <br>
                <b>
                    <p>5. Paste special in your given file.xlsx (A2)</p>
                </b>
                <p><img src="{{ asset('images/instructions/5.png') }}" style="padding-left: 67px; max-width: 1312px;" alt=""></p>

                <br>
                <b>
                    <p>6. Upload in our system</p>
                </b>
                <p><img src="{{ asset('images/instructions/6.png') }}" style="padding-left: 67px; max-width: 1312px;" alt=""></p>

            </div>
        </div>
    </section>
</x-app-layout>
