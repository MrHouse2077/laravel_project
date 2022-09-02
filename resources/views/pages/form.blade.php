<form action="/mailer" method="POST">
    @csrf
    <input type="text" name="name">
    <textarea name="message"  cols="30" rows="10"></textarea>
    <button type="submit">ОТправить!</button>
</form>