<div class="comment_holder" id="comments">
    <ul class="comment-list">



        @if($comentarios->count()>0)
        @foreach($comentarios as $comentario)               
        <li>
            <div class="comment">
                <div class="image">
                    <img alt="" src="http://1.gravatar.com/avatar/f6d1f09ab70a759c13563152c99d9b7b?s=73&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D73&amp;r=G"
                         class="avatar avatar-73 photo" height="73" width="73"> </div>
                <div class="text">
                    <span class="comment_arrow"></span>
                    <div class="text_inner">
                        <span class="info">
                            <span style="float:left;">{{$comentario->nombre}}</span>
                            <span style="float:right;">{{$comentario->created_at->format('d/m/Y')}}</span>
                        </span>
                        <div class="text_holder" id="comment-4">
                            <p>{{$comentario->contenido}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        @endforeach
        <div style="margin-top:20px;margin-bottom:20px;" class="separator transparent"></div>
            {!! $comentarios->render() !!}
        @else
        <li>
            No hay comentarios. ¡Sé el primero!
        </li>
        @endif






    </ul>
</div>