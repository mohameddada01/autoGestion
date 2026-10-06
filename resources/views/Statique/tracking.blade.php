<x-Statique-master title="AUTOGESTION | TRACK U CAR">
<div class="flex h-screen mb-1 ">

    <!-- Left image side -->
    <div class="hidden lg:flex w-1/2 h-full bg-cover bg-center relative"
         style="background-image: url('https://media.istockphoto.com/id/1347150429/photo/professional-mechanic-working-on-the-engine-of-the-car-in-the-garage.jpg?s=612x612&w=0&k=20&c=5zlDGgLNNaWsp_jq_L1AsGT85wrzpdl3kVH-75S-zTU=');">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 p-12 text-white flex flex-col justify-center h-full">
            <h1 class="text-4xl font-bold mb-4 leading-tight">Welcome to Car Repair Admin</h1>
            <p class="text-lg text-blue-100">
                Track your vehicle repair progress with the code we gave you.
            </p>
        </div>
    </div>

    <!-- Right form side -->
    <div class="w-full lg:w-1/2 flex items-center justify-center px-6 py-16">
        <div class="max-w-md w-full">
            <div class="mb-10 text-center">
                <h2 class="text-3xl font-bold text-gray-800">Track Your Repair</h2>
                <p class="text-gray-500 mt-2">Enter your code below to view your repair status.</p>
            </div>

            <form action="" method="GET" class="space-y-6">
                <input
                    type="text"
                    name="code"
                    placeholder="e.g. CAR12345"
                    class="w-full px-5 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700 text-lg"
                    required
                />

                <button
                    type="submit"
                    class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition text-lg"
                >
                    Check Status
                </button>
            </form>

            <div class="text-center mt-6 text-sm text-gray-500">
                Didn’t receive a code? <a href="#" class="text-blue-600 hover:underline">Contact your garage</a>
            </div>
        </div>
    </div>
</div>
  

   







</x-Statique-master>