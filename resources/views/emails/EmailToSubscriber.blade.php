@component('mail::message')
# Hi, you have a new post update.

{{$post_title}} <br>
{{$post_content}}<br>

Thanks,<br>
Stay tuned for more updates
@endcomponent
