@if (count($topics))

    <ul>
        @foreach($topics as $topic)
            <li class="list-group-item">
                <a href="{{ $topic->link() }}">
                    {{ $topic->title }}
                </a>
                <span class="meta pull-right">
                    {{ $topic->reply_count }} 回复
                    <span> · </span>
                    {{ $topic->created_at->diffForHumans() }}
                </span>
            </li>
        @endforeach
    </ul>

@else
    <div class="empty-block">没数据啊(づ￣3￣)づ╭❤～</div>
@endif

{{--分页--}}
{!! $topics->render() !!}