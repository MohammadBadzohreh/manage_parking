@if(session()->has('feedbacks'))
    @foreach(session()->get('feedbacks') as $message)
        iziToast.show({
        title: "{{ $message["title"] }}",
        class: 'irs',
        message: "{{ $message["body"] }}",
        rtl: true,
        color:'{{ $message["color"] ?? "green" }}'
        });
    @endforeach
@endif
