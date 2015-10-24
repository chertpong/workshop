<!DOCTYPE html>
<html>
<head>
</head>
<body>
<img src="data:{!! $picture->mime_type !!};base64, {!! $picture->data !!}" />
</body>
</html>