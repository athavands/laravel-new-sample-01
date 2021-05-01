<div>
<form method="get" action="{{ route('sendrequest') }}">
    @csrf
    <input type="hidden" name="status" value="1">
    <h2>ENter SQL Query Below</h2>
    <textarea id="w3review" name="myquery" rows="8" cols="50">
    </textarea><br>
    <button type="submit">send Request</button>
</form>
</div>