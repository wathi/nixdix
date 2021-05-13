@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex flex-row">
        <div class="author" class="col-3">
            <div class="author-content border rounded p-2 mb-2">
                <img src="..." alt="...">
                <h5>Lorem ipsum</h5>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="like-content">
                <button class="btn btn-sm btn-outline-secondary">Like</button>
            </div>
        </div>
        <div id="novel" class="col-9">
            <div id="novel-header" class="text-justify border rounded mb-2 p-2">
                <h5 id="novel-title">Lorem ipsum dolor, sit amet</h5>
                <p id="novel-des">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas cum nulla ipsam. Autem ducimus earum non est commodi dolorem voluptate.Autem ducimus earum non est commodi dolorem voluptate.</p>
                <p>
                <small>Status:</small><br />
                <small>Warning:</small><br />
                </p>
            </div>
            <div id="novel-content" class="text-justify border rounded p-2">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore reprehenderit nisi nihil velit consequatur repellendus corrupti esse voluptates voluptatem maiores porro ipsam, harum eligendi dolore? Incidunt nostrum amet enim animi, aspernatur pariatur ipsum, quod iure consequuntur labore voluptates id non quasi ex commodi optio itaque, omnis totam. Architecto adipisci inventore maiores, quo voluptatem unde a nobis nesciunt non incidunt! Quidem impedit maiores delectus ex velit asperiores libero temporibus. In, distinctio libero id voluptate nesciunt fuga dolores illo quaerat alias totam deleniti neque unde? Iste vel, perspiciatis, ipsam at alias hic ea perferendis repellendus est necessitatibus ab, ipsum explicabo accusamus voluptatum!
                <br /><br />
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, quam deleniti, autem quas sequi tenetur velit eius obcaecati dolorem quo ullam fuga non enim, ad at cupiditate pariatur? Iusto unde alias nemo, non commodi ipsa in dolor quam, blanditiis eum aperiam exercitationem, illo temporibus minima officiis enim voluptate numquam quaerat voluptatum maiores! Quae cupiditate vero, assumenda tempore qui sint, dignissimos aliquid minima quod, sunt beatae ut. Quidem dolores ipsa dolorum doloremque, quo nostrum quaerat iure recusandae dicta explicabo officiis soluta ipsam vitae possimus mollitia ratione dolor rerum odit doloribus? Expedita delectus tempore sapiente incidunt natus dolore sint nesciunt est placeat!
                <br /><br />
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, quam deleniti, autem quas sequi tenetur velit eius obcaecati dolorem quo ullam fuga non enim, ad at cupiditate pariatur? Iusto unde alias nemo, non commodi ipsa in dolor quam, blanditiis eum aperiam exercitationem, illo temporibus minima officiis enim voluptate numquam quaerat voluptatum maiores! Quae cupiditate vero, assumenda tempore qui sint, dignissimos aliquid minima quod, sunt beatae ut. Quidem dolores ipsa dolorum doloremque, quo nostrum quaerat iure recusandae dicta explicabo officiis soluta ipsam vitae possimus mollitia ratione dolor rerum odit doloribus? Expedita delectus tempore sapiente incidunt natus dolore sint nesciunt est placeat!
            </div>
        </div>
    </div>
</div>
@endsection
