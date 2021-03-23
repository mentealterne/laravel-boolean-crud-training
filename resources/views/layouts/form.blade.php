
@php
if(isset($edit) && !empty($edit)) {
    $method = 'PUT';
    $action = route('movies.update', compact('movie'));
} else {
    $method = 'POST';
    $action = route('movies.store');
}
@endphp

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{$action}}">
    @csrf
    @method($method)
    <div class="form-group">
        <label for="cover">Cover </label>
        <input type="text" class="form-control {{$errors->has('cover') ? 'is-invalid' : ''}}" name="cover"  value="{{isset($movie) ? $movie->cover : ''}}"  >
        <div class="invalid-feedback">{{$errors->first('cover')}}</div>
    </div>

    <div class="form-group">
        <label   for="title">Titolo </label>
        <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" name="title"  value="{{isset($movie) ? $movie->title : ''}}"  >
        <div class="invalid-feedback">{{$errors->first('title')}}</div>
    </div>

    <div class="form-group">
        <label for="director">Regista </label>
        <input type="text" class="form-control {{$errors->has('director') ? 'is-invalid' : ''}}" name="director"  value="{{isset($movie) ? $movie->cover : ''}}"  >
        <div class="invalid-feedback">{{$errors->first('director')}}</div>
    </div>

    <div class="form-group">
        <label for="genre">Genere </label>
        <input type="text" class="form-control {{$errors->has('genre') ? 'is-invalid' : ''}}" name="genre"  value="{{isset($movie) ? $movie->genre : ''}}"  >
        <div class="invalid-feedback">{{$errors->first('genre')}}</div>
    </div>

    <div class="form-group">
        <label for="abstract">Abstract </label>
        <input type="text" class="form-control {{$errors->has('abstract') ? 'is-invalid' : ''}}" name="abstract"  value="{{isset($movie) ? $movie->abstract : ''}}"  >
        <div class="invalid-feedback">{{$errors->first('cover')}}</div>
    </div>

    <div class="form-group">
        <label for="production">Produzione </label>
        <input type="text" class="form-control {{$errors->has('production') ? 'is-invalid' : ''}}" name="production"  value="{{isset($movie) ? $movie->production : ''}}"  >
        <div class="invalid-feedback">{{$errors->first('production')}}</div>
    </div>

    <div class="form-group">
        <label for="cover">Lingua </label>
        <input type="text" class="form-control {{$errors->has('language') ? 'is-invalid' : ''}}" name="language"  value="{{isset($movie) ? $movie->language : ''}}"  >
        <div class="invalid-feedback">{{$errors->first('language')}}</div>
    </div>
    <div class="form-group">
        <label for="ratings">Valutazione </label>
        <input type="number" class="form-control {{$errors->has('ratings') ? 'is-invalid' : ''}}" name="ratings"  value="{{isset($movie) ? $movie->ratings : ''}}"  >
        <div class="invalid-feedback">{{$errors->first('ratings')}}</div>
    </div>

    <div class="form-group">
        <label for="year">Anno </label>
        <input type="number" class="form-control {{$errors->has('year') ? 'is-invalid' : ''}}" name="year"  value="{{isset($movie) ? $movie->year : ''}}"  >
        <div class="invalid-feedback">{{$errors->first('year')}}</div>
    </div>

    <div class="form-group">
        <label for="cover">Disponibile fino al </label>
        <input type="date" class="form-control {{$errors->has('expireDate') ? 'is-invalid' : ''}}" name="expireDate"  value="{{isset($movie) ? $movie->expireDate : ''}}"  >
        <div class="invalid-feedback">{{$errors->first('expireDate')}}</div>
    </div>

    <!-- //TODO: impostare option selected in base al valore di visible -->
    <div class="form-group">
        <label for="visible">Attivo </label>
        <select name="visible" class="form-control {{$errors->has('visible') ? 'is-invalid' : ''}}">
            <option value="0">NO</option>
            <option value="1">SI</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
