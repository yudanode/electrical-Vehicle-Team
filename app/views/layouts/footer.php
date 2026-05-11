</main>


</div>


</div>


<script>
    
    const sidebar = document.getElementById('admin-sidebar');
    const overlay = document.getElementById('sidebar-overlay');
    const hamburger = document.querySelector('[onclick*="admin-sidebar"]');

    if (sidebar && overlay) {
        const observer = new MutationObserver(() => {
            if (sidebar.classList.contains('-translate-x-full')) {
                overlay.classList.add('hidden');
            } else {
                overlay.classList.remove('hidden');
            }
        });
        observer.observe(sidebar, {
            attributes: true,
            attributeFilter: ['class']
        });
    }
</script>

</body>

</html>