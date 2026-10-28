    <footer class="text-center py-8 text-[13px] opacity-60">
        <p>&copy; 2026 Yoga Pratama</p>
    </footer>

    <script>
        const t = document.getElementById('navToggle'), m = document.getElementById('mobileMenu');
        t?.addEventListener('click', () => {
            const open = m.classList.toggle('hidden');
            t.setAttribute('aria-expanded', String(!open));
        });
    </script>
</body>
</html>
