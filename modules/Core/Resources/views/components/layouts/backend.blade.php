<!DOCTYPE html>
<html>

<head>

	<x-core::layouts.backend.head />

</head>

<body>

	<x-core::layouts.backend.header />

	<x-core::layouts.backend.drawer />

	<!---main content--->
	<div class="main mt-3 rounded">
		
		<div style="min-height: calc(100vh - 155px);">
                {{ $slot }}
        </div>

		<x-core::layouts.backend.footer />

	</div>
	<!---end main content--->

	<x-core::layouts.backend.script />

</body>

</html>
