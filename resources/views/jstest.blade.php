@php
    $name=['a','v','c','d'];
@endphp

<script>
    // var data=@json($name);

    var data={{ Js::from($name) }};
    
    data.forEach(function (e){
        console.log(e);
    });
</script>