    <!-- Container untuk Formulir Pendaftaran -->
    <div class="max-w-5xl mx-auto mt-12 p-6 bg-white shadow-2xl rounded-xl grid grid-cols-1 gap-10">
        <div class="md:grid md:grid-cols-2 md:gap-10">
            <!-- Formulir Pendaftaran -->
            <div class="p-6 bg-gray-100 rounded-lg shadow-inner mb-6 md:mb-0">
                <h2 class="text-2xl font-semibold mb-6 text-center text-purple-600">Biodata Peserta</h2>
                <form action="#" method="POST">
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" id="name" name="name" required
                            class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500 pl-5 py-2 transition-all duration-300 ease-in-out hover:bg-purple-50"
                            placeholder="Masukkan nama lengkap">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Alamat Email</label>
                        <input type="email" id="email" name="email" required
                            class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500 pl-5 py-2 transition-all duration-300 ease-in-out hover:bg-purple-50"
                            placeholder="Masukkan email">
                    </div>
                    <div class="mb-4">
                        <label for="birthplace" class="block text-sm font-medium text-gray-700">Tempat Lahir</label>
                        <input type="text" id="birthplace" name="birthplace" required
                            class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500 pl-5 py-2 transition-all duration-300 ease-in-out hover:bg-purple-50"
                            placeholder="Masukkan tempat lahir">
                    </div>
                    <div class="mb-4">
                        <label for="birthdate" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                        <input type="date" id="birthdate" name="birthdate" required
                            class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500 pl-5 py-2 transition-all duration-300 ease-in-out hover:bg-purple-50">
                    </div>
                    <div class="mb-4">
                        <label for="address" class="block text-sm font-medium text-gray-700">Alamat</label>
                        <textarea id="address" name="address" required
                            class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500 pl-5 py-2 transition-all duration-300 ease-in-out hover:bg-purple-50"
                            placeholder="Masukkan alamat lengkap"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Nomor HP</label>
                        <input type="text" id="phone" name="phone" required
                            class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500 pl-5 py-2 transition-all duration-300 ease-in-out hover:bg-purple-50"
                            placeholder="Masukkan nomor HP">
                    </div>
                </form>
            </div>

            <!-- Informasi Pendidikan -->
            <div class="p-6 bg-gray-100 rounded-lg shadow-inner mb-6 md:mb-0">
                <h3 class="text-2xl font-semibold mb-6 text-center text-yellow-600">Informasi Pendidikan</h3>
                <div class="mb-4">
                    <label for="education_level" class="block text-sm font-medium text-gray-700">Jenjang
                        Pendidikan</label>
                    <input type="text" id="education_level" name="education_level" required
                        class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500 pl-5 py-2 transition-all duration-300 ease-in-out hover:bg-yellow-50"
                        placeholder="Masukkan jenjang pendidikan">
                </div>
                <div class="mb-4">
                    <label for="institution" class="block text-sm font-medium text-gray-700">Lembaga Pendidikan</label>
                    <input type="text" id="institution" name="institution" required
                        class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500 pl-5 py-2 transition-all duration-300 ease-in-out hover:bg-yellow-50"
                        placeholder="Masukkan lembaga pendidikan">
                </div>
                <div class="mb-4">
                    <label for="major" class="block text-sm font-medium text-gray-700">Fakultas / Jurusan</label>
                    <input type="text" id="major" name="major" required
                        class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500 pl-5 py-2 transition-all duration-300 ease-in-out hover:bg-yellow-50"
                        placeholder="Masukkan fakultas / jurusan">
                </div>
                <div class="mb-4">
                    <label for="upload_letter" class="block text-sm font-medium text-gray-700">Upload Surat dari
                        Sekolah/Kampus</label>
                    <input type="file" id="upload_letter" name="upload_letter"
                        accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" required
                        class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500 pl-5 py-2 transition-all duration-300 ease-in-out hover:bg-yellow-50">
                </div>
            </div>
        </div>

        <!-- Tombol Daftar -->
        <div class="text-center">
            <button type="submit"
                class="w-1/3 bg-gradient-to-r from-blue-900 to-yellow-400 text-white py-2 rounded-full shadow-lg hover:scale-110 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 mx-auto transition-transform duration-300">
                Daftar
            </button>
        </div>
    </div>
