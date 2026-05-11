function goComp(id, btn) {
    document.querySelectorAll('.cpanel').forEach(p => p.classList.remove('active'));
    document.querySelectorAll('.ctab').forEach(b => b.classList.remove('active'));
    document.getElementById(id).classList.add('active');
    btn.classList.add('active');
}
