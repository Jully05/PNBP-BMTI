@extends('layouts.adminbook')

@section('title', 'Admin | List Booking Binangkit')

@section('content')
    <div class="container">
        <div class="bg-primary py-3">
            <h3 class="text-white text-center">JADWAL BOOKING GEDUNG BINANGKIT</h3>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end">
                <a href="{{ route('binangkit.create') }}" class="btn btn-primary">Tambah Booking +</a>
            </div>
        </div>

        <!-- Kalender -->
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div id='calendar' style="margin-top: 50px;"></div>
            </div>
        </div>

        <!-- Tabel Booking -->
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card border-0 shadow-lg my-4">
                    <div class="card-header bg-primary">
                        <h3 class="text-white">TABEL BOOKING</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pengguna</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Waktu Penggunaan</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tableBookings as $key => $booking)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $booking->nama_pengguna }}</td>
                                        <td>{{ $booking->nama_kegiatan }}</td>
                                        <td>{{ $booking->tanggal_mulai }}</td>
                                        <td>{{ $booking->tanggal_selesai }}</td>
                                        <td>{{ $booking->waktu_penggunaan }}</td>
                                        <td>
                                            <a href="{{ route('binangkit.edit', $booking) }}" class="btn btn-dark"><i
                                                    class="fas fa-pen"></i></a>
                                            <a href="#" onclick="confirmDelete({{ $booking->id }}, event);"
                                                class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                            <form id="delete-product-from-{{ $booking->id }}"
                                                action="{{ route('binangkit.destroy', $booking->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css' rel='stylesheet' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js'></script>

    {{-- style css --}}
    <style>
        .fc-event {
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .fc-event:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        table th,
        table td {
            white-space: nowrap;
            text-align: center;
            vertical-align: middle;
        }
    </style>

    <!-- Modal -->
    <div class="modal fade" id="bookingModal" tabindex="-1" role="dialog" aria-labelledby="bookingModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookingModalLabel">Detail Booking</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="bookingForm">
                        @csrf
                        <input type="hidden" id="bookingId" name="bookingId">
                        <div class="form-group">
                            <label for="nama_pengguna">Nama Pengguna</label>
                            <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_kegiatan">Nama Kegiatan</label>
                            <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" required>
                        </div>
                        <div class="form-group">
                            <label for="waktu_penggunaan">Waktu Penggunaan</label>
                            <input type="text" class="form-control" id="waktu_penggunaan" name="waktu_penggunaan"
                                required>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Konfirmasi Hapus -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus Booking</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus booking ini?
                    <form id="deleteForm" method="post">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="booking_id" id="deleteBookingId">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger" form="deleteForm">Hapus</button>
                </div>
            </div>
        </div>
    </div>


    <!-- JavaScript untuk FullCalendar -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: @json($calendarBookings),
                eventClick: function(info) {
                    var booking = info.event.extendedProps;
                    document.getElementById('bookingId').value = info.event.id;
                    document.getElementById('nama_pengguna').value = booking.nama_pengguna;
                    document.getElementById('nama_kegiatan').value = info.event.title;
                    document.getElementById('waktu_penggunaan').value = booking.waktu_penggunaan;

                    $('#bookingModal').modal('show');
                }
            });

            calendar.render();
        });

        function confirmDelete(id, event) {
            event.preventDefault();

            var form = document.getElementById('deleteForm');
            form.action = '/binangkit/' + id;

            document.getElementById('deleteBookingId').value = id;

            $('#deleteModal').modal('show');

        }
    </script>
@endsection
