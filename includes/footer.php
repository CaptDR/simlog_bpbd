</div> <!-- Tutup Container max-w-1440px -->
        </div> <!-- Tutup Container flex-col -->
    </main>

    <!-- Footer Bawah -->
    <footer class="w-full bg-[#111111] py-space-lg text-center mt-auto">
        <div class="w-full px-gutter flex flex-col sm:flex-row items-center justify-between gap-space-sm">
            <span class="font-label-md text-label-md text-secondary-fixed-dim">© 2026 BPBD Kota Cirebon - Sistem Informasi Manajemen Logistik & Inventaris Bencana</span>
            <div class="flex items-center gap-space-md font-label-sm text-label-sm text-secondary-fixed-dim">
                <span class="flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-[#10b981]"></span>POSKO INDUK AKTIF</span>
                <span>VERSI SISTEM 2.4-PROD</span>
            </div>
        </div>
    </footer>

    <!-- Script Filter Interaktif -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tabButtons = document.querySelectorAll('.tab-btn');
            const tableRows = document.querySelectorAll('#transactionTableBody tr');
            const searchInput = document.getElementById('searchInput');

            let currentFilter = 'all';

            function filterData() {
                const query = (searchInput ? searchInput.value : '').toLowerCase().trim();

                tableRows.forEach(row => {
                    const type = row.getAttribute('data-type');
                    const text = row.innerText.toLowerCase();
                    const matchesTab = (currentFilter === 'all') || (type === currentFilter);
                    const matchesQuery = query === '' || text.includes(query);

                    if (matchesTab && matchesQuery) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            }

            tabButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    tabButtons.forEach(b => {
                        b.classList.remove('bg-surface-container-lowest', 'text-on-surface', 'font-bold', 'shadow-sm');
                        b.classList.add('text-secondary');
                    });
                    btn.classList.add('bg-surface-container-lowest', 'text-on-surface', 'font-bold', 'shadow-sm');
                    btn.classList.remove('text-secondary');

                    currentFilter = btn.getAttribute('data-category');
                    filterData();
                });
            });

            if (searchInput) {
                searchInput.addEventListener('input', filterData);
            }
        });
    </script>
</body>
</html>