    // --- Data Definitions ---
    const packageData = {
        starter: { id: "starter", name: "Paket Starter", price: "Rp 100.000", description: "Desain logo dasar dan kartu nama. Pilihan tepat untuk Anda yang baru memulai dan membutuhkan identitas visual awal yang esensial.", features: ["Desain Logo Dasar (1 konsep final)", "Desain Kartu Nama (1 sisi, siap cetak)", "1x Revisi Minor", "File final (JPG, PNG transparant)"], estimation: "3-5 hari kerja", imagePlaceholder: "Paket+Starter" },
        bisnis: { id: "bisnis", name: "Paket Bisnis", price: "Rp 250.000", description: "Pilihan ideal untuk UMKM yang ingin meningkatkan citra brand secara signifikan. Paket ini mencakup elemen-elemen penting untuk kehadiran online dan offline yang profesional.", features: ["Desain Logo Profesional (2 konsep awal)", "Desain Kartu Nama (2 sisi, siap cetak)", "Desain Kop Surat Digital", "Template Desain Media Sosial (3 template)", "2x Revisi", "File final (JPG, PNG, PDF, AI/EPS)"], estimation: "5-7 hari kerja", imagePlaceholder: "Paket+Bisnis" },
        profesional: { id: "profesional", name: "Paket Profesional", price: "Rp 350.000", description: "Solusi branding komprehensif untuk UMKM yang siap tampil lebih profesional dan konsisten di semua media promosi.", features: ["Semua di Paket Bisnis", "Desain Brosur/Flyer (1 desain)", "Panduan Brand Sederhana (Logo usage, color palette)", "3x Revisi", "Dukungan Prioritas", "File final lengkap (JPG, PNG, PDF, AI/EPS)"], estimation: "7-10 hari kerja", imagePlaceholder: "Paket+Profesional" }
    };

    const dummyOrderData = {
        "DGMR-12345": { id: "DGMR-12345", clientName: "Budi Santoso", businessName: "Warung Kopi Senja", clientEmail: "budi.s@contoh.com", clientPhone: "081234567890", packageName: "Paket Bisnis", orderDate: "12 Apr 2025", status: "baru", statusText: "Baru", statusColor: "blue", price: "Rp 1.500.000", paymentStatus: "Belum Dikonfirmasi", inspirationRef: "Logo Minimalis", clientNeeds: "Usaha saya warung kopi kecil di pinggir jalan, targetnya anak muda. Ingin logo yang modern tapi santai, warna coklat dan krem. Butuh juga desain kartu nama dan template IG post untuk promosi menu baru." },
        "DGMR-12344": { id: "DGMR-12344", clientName: "Ani Wijaya", businessName: "Toko Roti Bu Ani", clientEmail: "ani.w@contoh.com", clientPhone: "081234567891", packageName: "Paket Starter", orderDate: "11 Apr 2025", status: "proses_desain", statusText: "Proses Desain", statusColor: "yellow", price: "Rp 500.000", paymentStatus: "Lunas", inspirationRef: "-", clientNeeds: "Butuh logo simpel untuk toko roti rumahan." },
        "DGMR-12340": { id: "DGMR-12340", clientName: "Citra Lestari", businessName: "Klinik Sehat Bersama", clientEmail: "citra.l@contoh.com", clientPhone: "081234567892", packageName: "Paket Profesional", orderDate: "10 Apr 2025", status: "selesai", statusText: "Selesai", statusColor: "green", price: "Rp 2.500.000", paymentStatus: "Lunas", inspirationRef: "Modern Business Card", clientNeeds: "Branding lengkap untuk klinik baru, butuh terlihat profesional dan terpercaya." }
     };
     const statusColors = {
        baru: 'blue', konsultasi: 'cyan', proses_desain: 'yellow',
        menunggu_feedback: 'orange', revisi: 'purple', menunggu_pembayaran: 'pink',
        selesai: 'green', dibatalkan: 'red'
     };

    // --- DOM Elements ---
    const appContainer = document.getElementById('app-container');
    const userContent = document.getElementById('user-content');
    const adminLoginSection = document.getElementById('admin-login');
    const adminAreaSection = document.getElementById('admin-area');
    const adminPages = adminAreaSection?.querySelectorAll('.admin-page'); // Use optional chaining
    const adminNavLinks = adminAreaSection?.querySelectorAll('.admin-nav-link');
    const adminContentArea = document.getElementById('admin-content-area');
    const loginErrorMessage = document.getElementById('login-error-message');
    const adminLoginForm = document.getElementById('admin-login-form'); // Get form element
    const adminLoginButton = document.getElementById('admin-login-button');

    // Portfolio Elements
    const portfolioGrid = document.getElementById('portfolio-grid');
    const loadMorePortfolioButton = document.getElementById('load-more-portfolio');
    const hiddenPortfolioItems = portfolioGrid ? portfolioGrid.querySelectorAll('.portfolio-item.hidden-initially') : [];

    // Package Detail Elements
    const packageCardsContainer = document.getElementById('package-cards-container');
    const inlineDetailContainer = document.getElementById('inline-package-detail-container');
    const detailTitle = document.getElementById('package-detail-title');
    const detailImage = document.getElementById('package-detail-image');
    const detailName = document.getElementById('package-detail-name');
    const detailPrice = document.getElementById('package-detail-price');
    const detailDescription = document.getElementById('package-detail-description');
    const detailFeaturesList = document.getElementById('package-detail-features');
    const detailEstimation = document.getElementById('package-detail-estimation');
    const detailOrderButton = document.getElementById('package-detail-order-button');
    const closeDetailButton = document.getElementById('close-detail-button');
    const formPackageSelect = document.getElementById('form-paket-select');

    // Inspiration Elements
    const unsplashAccessKey = 'UNSPLAS_API_KEY';
    const unsplashApiUrl = 'https://api.unsplash.com/search/photos';
    const imagesPerPage = 12;
    let unsplashCurrentPage = 1;
    let unsplashCurrentQuery = '';
    let unsplashIsLoading = false;
    const filterContainerPage = document.getElementById('inspiration-filters-page');
    const gridContainerPage = document.getElementById('inspiration-grid-page');
    const loaderPage = document.getElementById('inspiration-loader-page');
    const errorMsgPage = document.getElementById('inspiration-error-page');
    const loadMoreInspirationButton = document.getElementById('load-more-inspiration');

    // Order Form & Status Elements
    const orderForm = document.getElementById('order-form-element');
    const orderStatusSection = document.getElementById('user-order-status');

    // --- Helper Functions ---

    function showElement(element, displayStyle = 'block') {
        if (element) {
            element.style.display = displayStyle;
        }
    }

    function hideElement(element) {
        if (element) {
            element.style.display = 'none';
        }
    }

    // --- Admin Area Navigation ---

    // Function to show a specific admin content page
    function showAdminContent(contentIdToShow) {
        if (!adminPages) return;
        adminPages.forEach(page => hideElement(page));
        const contentToShow = document.getElementById(contentIdToShow);
        showElement(contentToShow); // Use helper
        updateAdminNav(contentIdToShow);
    }

    // Function to update the active state of admin navigation links
    function updateAdminNav(activePageId) {
        if (!adminNavLinks) return;
        adminNavLinks.forEach(link => {
            const linkTargetId = link.getAttribute('href')?.substring(1);
            if (linkTargetId === activePageId) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    }

    // Function to display admin order details
    function showAdminOrderDetail(orderId) {
        const orderData = dummyOrderData[orderId]; // dummy data
        const detailView = document.getElementById('admin-order-detail-view');
        const placeholder = document.getElementById('admin-order-placeholder');

        if (orderData && detailView && placeholder) {
            // Populate data (same as before)
            document.getElementById('admin-order-id-display').textContent = `#${orderData.id}`;
            document.getElementById('admin-client-name').textContent = orderData.clientName;
            document.getElementById('admin-client-business').textContent = orderData.businessName;
            document.getElementById('admin-client-email').textContent = orderData.clientEmail;
            document.getElementById('admin-client-phone').textContent = orderData.clientPhone;
            document.getElementById('admin-package-name').textContent = orderData.packageName;
            document.getElementById('admin-order-date').textContent = orderData.orderDate;
            document.getElementById('admin-order-price').textContent = orderData.price;
            document.getElementById('admin-payment-status').textContent = orderData.paymentStatus;
            document.getElementById('admin-inspiration-ref').textContent = orderData.inspirationRef || '-';
            document.getElementById('admin-client-needs').textContent = orderData.clientNeeds;

            const statusSpan = document.getElementById('admin-order-status');
            statusSpan.textContent = orderData.statusText;
            Object.values(statusColors).forEach(color => statusSpan.classList.remove(`bg-${color}-100`, `text-${color}-800`));
            const color = statusColors[orderData.status] || 'slate';
            statusSpan.classList.add(`bg-${color}-100`, `text-${color}-800`);

            document.getElementById('admin-update-status-select').value = orderData.status;

            hideElement(placeholder);
            showElement(detailView);
            showAdminContent('admin-orders');
        } else {
            console.warn(`Order data for ID ${orderId} not found.`);
            showElement(placeholder);
            hideElement(detailView);
        }
    }

    // --- User Area Functionality ---

    function showPortfolioItems() {
        hiddenPortfolioItems.forEach(item => showElement(item));
        hideElement(loadMorePortfolioButton);
    }

    function showPackageDetails(packageId) {
        const data = packageData[packageId];
        if (!data || !inlineDetailContainer) return;

        // Populate details (same as before)
        detailTitle.textContent = `Detail ${data.name}`;
        detailName.textContent = data.name;
        detailPrice.textContent = data.price;
        detailDescription.textContent = data.description;
        detailEstimation.textContent = data.estimation;
        detailImage.src = `https://placehold.co/400x300/e0e7ff/4f46e5?text=${data.imagePlaceholder.replace(/\s/g, '+')}`;
        detailImage.alt = data.name;
        detailFeaturesList.innerHTML = '';
        data.features.forEach(feature => {
            const li = document.createElement('li');
            li.textContent = feature;
            detailFeaturesList.appendChild(li);
        });
        if (formPackageSelect) formPackageSelect.value = packageId;

        // Show container and scroll
        inlineDetailContainer.classList.add('visible');
        inlineDetailContainer.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function hidePackageDetails() {
        if (inlineDetailContainer) {
            inlineDetailContainer.classList.remove('visible');
        }
        if (packageCardsContainer) {
            packageCardsContainer.querySelectorAll('.package-card').forEach(card => {
                card.classList.remove('highlighted');
            });
        }
    }

    // --- Unsplash API Functions ---
    async function fetchInspirationImagesPage(query, page = 1) {
        if (unsplashIsLoading) return;
        if (!unsplashAccessKey) {
            console.warn("Unsplash API Key is missing.");
            if(errorMsgPage) errorMsgPage.textContent = "Fitur Inspirasi memerlukan pengaturan (API Key hilang).";
            showElement(errorMsgPage); hideElement(loaderPage); hideElement(loadMoreInspirationButton);
            return;
        }
        unsplashIsLoading = true;
        showElement(loaderPage); hideElement(errorMsgPage);
        if(loadMoreInspirationButton) {
            loadMoreInspirationButton.disabled = true;
            loadMoreInspirationButton.textContent = 'Memuat...';
        }

        if (page === 1 && gridContainerPage) {
            gridContainerPage.innerHTML = '';
            hideElement(loadMoreInspirationButton);
        }

        const url = `${unsplashApiUrl}?query=${encodeURIComponent(query)}&page=${page}&per_page=${imagesPerPage}&client_id=${unsplashAccessKey}`;

        try {
            const response = await fetch(url);
            if (!response.ok) {
                let errorData = {}; try { errorData = await response.json(); } catch (e) {}
                let errorMessage = `HTTP error! status: ${response.status}`;
                if (response.status === 401) errorMessage = "Autentikasi Unsplash gagal. Periksa API Key.";
                else if (response.status === 403) errorMessage = "Akses Unsplash ditolak. Periksa batas tarif atau izin kunci.";
                else if (errorData.errors) errorMessage = `Unsplash API Error: ${errorData.errors.join(', ')}`;
                throw new Error(errorMessage);
            }
            const data = await response.json();

            if (data.results && data.results.length > 0) {
                displayImagesPage(data.results);
                if (data.results.length === imagesPerPage) {
                     showElement(loadMoreInspirationButton, 'inline-block');
                } else {
                    hideElement(loadMoreInspirationButton);
                }
            } else if (page === 1 && gridContainerPage) {
                gridContainerPage.innerHTML = '<p class="col-span-full text-center text-slate-500">Tidak ada gambar ditemukan.</p>';
                hideElement(loadMoreInspirationButton);
            } else {
                 hideElement(loadMoreInspirationButton);
            }

        } catch (error) {
            console.error('Error fetching Unsplash images:', error);
            if(errorMsgPage) errorMsgPage.textContent = `Gagal memuat gambar: ${error.message}`;
            showElement(errorMsgPage);
            hideElement(loadMoreInspirationButton);
        } finally {
            hideElement(loaderPage);
            unsplashIsLoading = false;
            if(loadMoreInspirationButton) {
                loadMoreInspirationButton.disabled = false;
                loadMoreInspirationButton.textContent = 'Muat Lebih Banyak Inspirasi';
                const imagesDisplayed = gridContainerPage ? gridContainerPage.querySelectorAll('a').length : 0;
                if (errorMsgPage?.style.display === 'block' || imagesDisplayed < imagesPerPage * page) {
                    hideElement(loadMoreInspirationButton);
                } else if (imagesDisplayed > 0) {
                     showElement(loadMoreInspirationButton, 'inline-block');
                }
            }
        }
    }

    function displayImagesPage(images) {
        if (!gridContainerPage) return;
        images.forEach(image => {
            const imgElement = document.createElement('img');
            imgElement.src = image.urls.small;
            imgElement.alt = image.alt_description || 'Inspiration Image';
            imgElement.className = 'w-full h-48 object-cover group-hover:opacity-90 transition-opacity duration-200 ease-in-out';
            imgElement.loading = 'lazy';
            imgElement.onerror = function() { this.onerror=null; this.src='https://placehold.co/300x200/fecaca/991b1b?text=Gagal+Muat'; this.alt='Gagal memuat gambar'; };

            const linkElement = document.createElement('a');
        linkElement.href = image.links.html;
        linkElement.target = '_blank';
        linkElement.rel = 'noopener noreferrer';
        linkElement.className = 'block relative rounded-lg overflow-hidden shadow-sm group border border-slate-200';

        const attributionSpan = document.createElement('span');
        attributionSpan.textContent = `Foto oleh ${image.user.name}`;
        attributionSpan.className = 'absolute bottom-0 left-0 right-0 p-1.5 bg-gradient-to-t from-black/60 to-transparent text-white text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-200 ease-in-out truncate';

        linkElement.appendChild(imgElement);
        linkElement.appendChild(attributionSpan);
        gridContainerPage.appendChild(linkElement);
        });

        }

        async function handleAdminLogin(event) {
        event.preventDefault();

        const emailInput = document.getElementById('admin_email');
        const passwordInput = document.getElementById('admin_password');
        const loginButton = document.getElementById('admin-login-button');
        const errorMessageDiv = document.getElementById('login-error-message');

        if (!emailInput || !passwordInput || !loginButton || !errorMessageDiv) {
        console.error("Login form elements not found!");
        return;
        }

        const email = emailInput.value.trim();
        const password = passwordInput.value.trim();

        if (!email || !password) {
        errorMessageDiv.textContent = "Email dan password harus diisi.";
        showElement(errorMessageDiv);
        return;
        }

        errorMessageDiv.textContent = "";
        hideElement(errorMessageDiv);
        loginButton.disabled = true;
        loginButton.textContent = "Memproses...";
        loginButton.classList.add('opacity-50', 'cursor-not-allowed');

        const formData = new FormData();
        formData.append('email', email);
        formData.append('password', password);

        try {
        const response = await fetch('login.php', {
        method: 'POST',
        body: formData
        });

        if (!response.ok) {
        throw new Error(`HTTP error! status: ${response.status}`);
        }

        const result = await response.json();

        if (result.status && result.status.success === true) {
        console.log("Login successful:", result.data);
        hideElement(userContent);
        hideElement(adminLoginSection);
        showElement(adminAreaSection, 'flex');
        showAdminContent('admin-dashboard');
        window.scrollTo(0, 0);

        } else {
        errorMessageDiv.textContent = result.data || "Login gagal. Silakan coba lagi.";
        showElement(errorMessageDiv);
        }

        } catch (error) {
        console.error('Login error:', error);
        errorMessageDiv.textContent = "Terjadi kesalahan saat mencoba login. Periksa koneksi Anda.";
        showElement(errorMessageDiv);
        } finally {
        loginButton.disabled = false;
        loginButton.textContent = "Login";
        loginButton.classList.remove('opacity-50', 'cursor-not-allowed');
        }
        }


        document.addEventListener('click', (event) => {
        const target = event.target;
        const navLink = target.closest('a.nav-link');
        const adminNavLink = target.closest('a.admin-nav-link');
        const adminOrderDetailLink = target.closest('a.admin-order-detail-link');

        if (navLink && navLink.getAttribute('href')?.startsWith('#') && !navLink.closest('#admin-area')) {
        const targetId = navLink.getAttribute('href');
        if (targetId === '#admin-login') {
        event.preventDefault();
        hideElement(userContent);
        showElement(adminLoginSection, 'flex');
        hideElement(adminAreaSection);
        window.scrollTo(0, 0);
        } else if (document.querySelector(targetId)) {
        if (targetId !== '#user-catalog' && !target.closest('#inline-package-detail-container')) {
        hidePackageDetails();
        }
        }
        }

        if (adminNavLink) {
        event.preventDefault();
        const targetId = adminNavLink.getAttribute('href')?.substring(1);
        if (targetId) {
        showAdminContent(targetId);
        }
        }

        if (adminOrderDetailLink) {
        event.preventDefault();
        const targetHref = adminOrderDetailLink.getAttribute('href');
        if (targetHref && targetHref.includes('/')) {
        const orderId = targetHref.split('/')[1];
        showAdminOrderDetail(orderId);
        }
        }

        if (target.id === 'admin-logout-button' || target.closest('#admin-logout-button') || target.id === 'admin-logo-link' || target.id === 'back-to-home-link') {
        event.preventDefault();
        showElement(userContent);
        hideElement(adminLoginSection);
        hideElement(adminAreaSection);
        window.scrollTo(0, 0);
        }

        if (target.classList.contains('package-detail-button')) {
        const packageId = target.dataset.packageId;
        const clickedCard = target.closest('.package-card');
        packageCardsContainer?.querySelectorAll('.package-card').forEach(card => card.classList.remove('highlighted'));
        clickedCard?.classList.add('highlighted');
        showPackageDetails(packageId);
        }

        if (target.id === 'close-detail-button') {
        hidePackageDetails();
        }

        if (target.id === 'load-more-portfolio') {
        showPortfolioItems();
        }

        if (target.tagName === 'BUTTON' && target.classList.contains('filter-button') && !unsplashIsLoading) {
        if (filterContainerPage) {
        filterContainerPage.querySelectorAll('.filter-button').forEach(button => {
        button.classList.remove('active', 'bg-indigo-600', 'text-white', 'font-semibold');
        if (!button.classList.contains('bg-slate-100')) {
        button.classList.add('bg-slate-100', 'text-slate-700');
        }
        });
        target.classList.add('active', 'bg-indigo-600', 'text-white', 'font-semibold');
        target.classList.remove('bg-slate-100', 'text-slate-700');
        unsplashCurrentQuery = target.dataset.query || 'minimalist logo design';
        unsplashCurrentPage = 1;
        fetchInspirationImagesPage(unsplashCurrentQuery, unsplashCurrentPage);
        }
        }

        if (target.id === 'load-more-inspiration' && !unsplashIsLoading) {
        unsplashCurrentPage++;
        fetchInspirationImagesPage(unsplashCurrentQuery, unsplashCurrentPage);
        }

        if (target.id === 'admin-login-button') {
        handleAdminLogin(event);
        }
        });

        if (orderForm) {
        orderForm.addEventListener('submit', (event) => {
        event.preventDefault();
        const selectedPackageId = formPackageSelect.value;
        const packageName = packageData[selectedPackageId]?.name || 'Paket Pilihan Anda';
        const orderRef = `DGMR-${Math.floor(Math.random() * 90000) + 10000}`;
        document.getElementById('confirm-package-name').textContent = packageName;
        document.getElementById('confirm-order-ref').textContent = orderRef;

        if (orderStatusSection) {
        const formSection = document.getElementById('user-order-form');
        hideElement(formSection);
        showElement(orderStatusSection);
        orderStatusSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
        });
        }

        document.addEventListener('DOMContentLoaded', () => {
        const currentYearSpan = document.getElementById('current-year');
        if(currentYearSpan) currentYearSpan.textContent = new Date().getFullYear();

        if (hiddenPortfolioItems.length > 0) {
        showElement(loadMorePortfolioButton, 'inline-block');
        } else {
        hideElement(loadMorePortfolioButton);
        }

        if (filterContainerPage) {
        const initialActiveButton = filterContainerPage.querySelector('.filter-button.active');
        unsplashCurrentQuery = initialActiveButton ? initialActiveButton.dataset.query : 'minimalist logo design';
        unsplashCurrentPage = 1;
        fetchInspirationImagesPage(unsplashCurrentQuery, unsplashCurrentPage);
        }

        showElement(userContent);
        hideElement(adminLoginSection);
        hideElement(adminAreaSection);
        hidePackageDetails();
        });
