<title>@yield('title', 'i-Lang - Edit Event')</title>
<link rel="shortcut icon" href="{{url('img/favicon.png')}}">
<link rel="stylesheet" href="{{asset ('css/styleUpload.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}"/>
@extends('layout.index')

@section('content')
    
      <form action="{{url('events/'.$events->id)}}" method="POST" enctype="multipart/form-data">
        <div class="container ctn-up">
        @csrf
        @method ('Patch')
        <div class="banner">
          <h1>Edit Event</h1>
        </div>
       <div>
         <img src="{{asset('storage/fotoEvent/'.$events->image)}}" style="width:250;heigth:350;" alt="{{$events->image}}">
       </div>
        <div class="item">
          <input type="hidden" name="id" value="{{$events->id}}" class="form-control">
          <p>Judul Event</p>
          <h5>Masukkan judul eventmu</h5>
          <input type="text" name="event_title" value="{{$events->event_title}}" class="form-control
          @error('event_title') is-invalid @enderror" value="{{old('event_title')}}">
					@error('event_title')
                        <div class="text-danger" id='error'>{{ $message }}</div>
                    @enderror

                    
                    <div class="form-group">
                      <p for="category">Kategori</p>
                      <h5>Jenis kategori yang cocok dengan eventmu (Pilih salah satu)</h5>
                      <select class="form-control" name="category" id="category">
                        <option value="Lomba"
                        {{ (old('category') ?? $events->category)==
                        'Lomba' ? 'selected': '' }} >
                        Lomba
                        </option>
                        <option value="Acara Pembukaan"
                        {{ (old('category') ?? $events->category)==
                        'Acara Pembukaan' ? 'selected': '' }} >
                        Acara Pembukaan
                        </option>
                        <option value="Konser Musik"
                        {{ (old('category') ?? $events->category)==
                        'Konser Musik' ? 'selected': '' }} >
                        Konser Musik
                        </option>
                        <option value="Pameran Budaya"
                        {{ (old('category') ?? $events->category)==
                        'Pameran Budaya' ? 'selected': '' }}>
                        Pameran Budaya
                        </option>
                        <option value="Lainnya"
                        {{ (old('category') ?? $events->category)==
                        'Lainnya' ? 'selected': '' }} >
                        Lainnya
                        </option>
                      </select>
                      @error('category')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
        <div class="item">
          <p>Penyelenggara</p>
          <h5>Nama penyelenggara eventmu</h5>
          <input type="text" name="organizer" value="{{$events->organizer}}" class="form-control
          @error('organizer') is-invalid @enderror" value="{{old('organizer')}}">
					@error('organizer')
                        <div class="text-danger" id='error'>{{ $message }}</div>
                    @enderror
        </div>
        <div class="item">
          <p>Tanggal Event</p>
          <h5>Tanggal dilaksanakannya eventmu (Pilih sesuai tanggalnya)</h5>

          <input type="date" name="event_date" value="{{$events->event_date}}" class="form-control
          @error('event_date') is-invalid @enderror" value="{{old('event_date')}}">
					@error('event_date')
                        <div class="text-danger" id='error'>{{ $message }}</div>
                    @enderror
          <i class="fas fa-calendar-alt"></i>
        </div>
        <div class="item">
          <p>Waktu Event</p>
          <h5>Waktu dimulainya eventmu (Pilih waktunya dibawah) </h5>

          <input type="time" name="event_time" value="{{$events->event_time}}"class="form-control
          @error('event_time') is-invalid @enderror" value="{{old('event_time')}}">
					@error('event_time')
                        <div class="text-danger" id='error'>{{ $message }}</div>
                    @enderror
        </div>
        <div class="item">
          <p>Tempat Event</p>
          <h5>Tempat diselenggarakan eventmu</h5>

          <input type="text" name="place" value="{{$events->place}}" class="form-control
          @error('place') is-invalid @enderror" value="{{old('place')}}">
					@error('place')
                        <div class="text-danger" id='error'>{{ $message }}</div>
                    @enderror
        </div>

        <div class="item">
          <p>Link Tiket</p>
          <h5>Masukkan link pembelian tiket (Apabila ada)</h5>

          <input type="text" name="ticket_link" value="{{$events->ticket_link}}" class="form-control
          @error('ticket_link') is-invalid @enderror" value="{{old('ticket_link')}}">
					@error('ticket_link')
                        <div class="text-danger" id='error'>{{ $message }}</div>
                    @enderror
        </div>

        <div class="item">
          <p>Deskripsi</p>
          <h5>Masukkan gambaran tentang eventmu </h5>

          <textarea name="desc" id="desc" cols="30"  rows="10">{{$events->desc}}</textarea>
        </div>
          <div class="item">
            <p>Nomor Hp Penyelenggara</p>
            <h5>Nomor hp yang bisa dihubungi (Masukkan dengan format '+62xxxxxxxxx' tanpa tanda petik)</h5>

            <input type="text" name="phone" value="{{$events->phone}}" class="form-control
            @error('phone') is-invalid @enderror" value="{{old('phone')}}">
            <input type="checkbox" name="wa_able" value="on"{{ old('wa_able') == 'on' ? 'checked' : '' }} id="wa">
            <label for="wa">Nomor ini Bisa Whatsapp</label>
            @error('phone')
                          <div class="text-danger" id='error'>{{ $message }}</div>
                      @enderror
          </div>
          <div class="item">
            <p>E-Mail Akun Ini</p>
            <h5>Masukkan email yang sama dengan akun yang sedang digunakan</h5>

            <input type="e-mail" name="email" value="{{$events->email}}" class="form-control disable
            @error('email') is-invalid @enderror" value="{{old('email')}}">
            @error('email')
                          <div class="text-danger" id='error'>{{ $message }}</div>
                      @enderror
          </div>
          
          
        
         <div class="item">
          <button class="primary-btn" type="submit">Edit Event</button> 
        </div>
      </div>
      </div>
      </form>
    

@endsection
