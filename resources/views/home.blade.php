@extends('layouts.main')

@section('main')

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-5">
                <form id="translate_form" class="form">
                    <div class="form-group">
                        <label for="target">英文</label>
                        <textarea name="target" id="target" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </form>
            </div>
            <div class="col-12 col-sm-2 d-flex align-items-center justify-content-center">
                <button class="btn btn-sm btn-block btn-primary">翻譯</button>
            </div>
            <div class="col-12 col-sm-5">BB</div>
        </div>
    </div>
</section>
<section>
    NoteBook List
</section>
@endsection