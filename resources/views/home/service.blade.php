
<main>
    <div class="content-wrapper">
        <div class="container mt-4">
            <div class="row justify-content-center mb-6">
                <div class="col-8">
                    <h2 class="text-center fw-bold">Service</h2>

					<form method="post" action = "{{route('create-service')}}">
					    {{ @csrf_field()}}
					    <label>service nama </label>
					    <input type="text" name ="namaservice">

					    <label>Deskripsi</label>
					    <input type="text" name ="deskripsi">
					    
					    <label>pricing</label>
					    <input type="text" name ="pricing">
					    <button type="submit">tambah</button>
					</form>

					@foreach($service as $s)
					 <h1>Service nama : {{ $s->service_name }}</h1>
					 <h1>Deskripsi : {{ $s->description}}</h1>
					 <h1>Pricing : {{ $s->pricing}}</h1>
					@endforeach
					{{ $service->links() }}
                </div>
            </div>
        </div>
    </div>
</main>
