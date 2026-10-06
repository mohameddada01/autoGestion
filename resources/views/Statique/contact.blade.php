<x-Statique-master title="AUTO-GETION | CONTACT">
<div class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h1 class="text-4xl font-bold mb-4">Contact Us</h1>
                <p class="text-xl text-gray-600">
                    Have questions? We're here to help. Reach out to us through any of the following methods.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-bold mb-6">Send us a Message</h2>
                    <form class="space-y-6">
                        <div>
                            <label class="block text-gray-700 mb-2" for="name">Name</label>
                            <input
                                type="text"
                                id="name"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Your Name"
                            >
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2" for="email">Email</label>
                            <input
                                type="email"
                                id="email"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="your@email.com"
                            >
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2" for="phone">Phone</label>
                            <input
                                type="tel"
                                id="phone"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="(555) 123-4567"
                            >
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2" for="message">Message</label>
                            <textarea
                                id="message"
                                rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="How can we help you?"
                            ></textarea>
                        </div>
                        <button
                            type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg font-semibold transition-colors"
                        >
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div>
                    <div class="bg-gray-100 p-8 rounded-lg mb-8">
                        <h2 class="text-2xl font-bold mb-6">Contact Information</h2>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <i class="lucide-phone h-6 w-6 text-blue-600 mr-4"></i>
                                <div>
                                    <h3 class="font-semibold">Phone</h3>
                                    <p class="text-gray-600">(555) 123-4567</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="lucide-mail h-6 w-6 text-blue-600 mr-4"></i>
                                <div>
                                    <h3 class="font-semibold">Email</h3>
                                    <p class="text-gray-600">info@autoprogarage.com</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="lucide-map-pin h-6 w-6 text-blue-600 mr-4"></i>
                                <div>
                                    <h3 class="font-semibold">Address</h3>
                                    <p class="text-gray-600">123 Mechanic Street<br>Anytown, ST 12345</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="lucide-clock h-6 w-6 text-blue-600 mr-4"></i>
                                <div>
                                    <h3 class="font-semibold">Hours</h3>
                                    <p class="text-gray-600">
                                        Monday - Friday: 8:00 AM - 6:00 PM<br>
                                        Saturday: 9:00 AM - 4:00 PM<br>
                                        Sunday: Closed
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="bg-gray-200 h-64 rounded-lg flex items-center justify-center">
                        <p class="text-gray-600">Map integration would go here</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    


</x-Statique-master>