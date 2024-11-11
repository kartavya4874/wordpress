<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chronicles of History</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-gray-900 text-white">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="text-2xl font-bold">Chronicles of History</div>
                <div class="hidden md:flex space-x-6">
                    <a href="#" class="hover:text-gray-300">Home</a>
                    <a href="#historical-events" class="hover:text-gray-300">Events</a>
                    <a href="#historical-figures" class="hover:text-gray-300">Figures</a>
                    <a href="#analysis" class="hover:text-gray-300">Analysis</a>
                    <a href="#about" class="hover:text-gray-300">About</a>
                    <a href="#contact" class="hover:text-gray-300">Contact</a>
                </div>
                <button class="md:hidden">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <div class="relative bg-gray-900 text-white py-32">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-5xl font-bold mb-4">Exploring History's Greatest Moments</h1>
            <p class="text-xl mb-8">Discover fascinating stories from the past</p>
            <a href="#latest-posts" class="bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-lg">Start Reading</a>
        </div>
    </div>

    <!-- Latest Posts -->
    <section id="latest-posts" class="container mx-auto px-6 py-16">
        <h2 class="text-3xl font-bold mb-8">Latest Historical Events</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Post 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="/api/placeholder/400/250" alt="Historical Event" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">The Fall of Constantinople</h3>
                    <p class="text-gray-600 mb-4">The historic fall of Constantinople in 1453 marked the end of the Byzantine Empire...</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800">Read More →</a>
                </div>
            </div>

            <!-- Post 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="/api/placeholder/400/250" alt="Historical Figure" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Leonardo da Vinci</h3>
                    <p class="text-gray-600 mb-4">The Renaissance polymath who revolutionized art and science...</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800">Read More →</a>
                </div>
            </div>

            <!-- Post 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="/api/placeholder/400/250" alt="Historical Analysis" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Impact of the Industrial Revolution</h3>
                    <p class="text-gray-600 mb-4">Analyzing the global changes brought by industrialization...</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800">Read More →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="bg-gray-100 py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-8">About Chronicles of History</h2>
            <div class="bg-white p-8 rounded-lg shadow-md">
                <p class="text-gray-600 mb-4">Welcome to Chronicles of History, where we explore fascinating historical events, figures, and their impact on our world today. Our mission is to make history accessible and engaging for everyone.</p>
                <p class="text-gray-600">Our team of historians and writers work diligently to bring you well-researched, accurate, and compelling historical content.</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-8">Contact Us</h2>
            <div class="bg-white p-8 rounded-lg shadow-md">
                <form class="space-y-6">
                    <div>
                        <label class="block text-gray-700 mb-2">Name</label>
                        <input type="text" class="w-full px-4 py-2 border rounded-lg">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Email</label>
                        <input type="email" class="w-full px-4 py-2 border rounded-lg">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Message</label>
                        <textarea class="w-full px-4 py-2 border rounded-lg h-32"></textarea>
                    </div>
                    <button class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <h3 class="text-xl font-bold">Chronicles of History</h3>
                    <p class="text-gray-400">Exploring the past, understanding the present</p>
                </div>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-gray-300"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="hover:text-gray-300"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="hover:text-gray-300"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="mt-8 text-center text-gray-400">
                <p>&copy; 2024 Chronicles of History. All rights reserved.</p>
            </div>
        </div>
    </footer>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>