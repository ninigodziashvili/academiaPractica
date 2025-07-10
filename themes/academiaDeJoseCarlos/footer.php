<?php
/**
 * Responsive Footer Template for WordPress
 * Add this to your theme's footer.php file
 */
?>

<style>
    :root {
        --primary-color: #d4a628;
        --primary-dark: #b8911f;
        --background-dark: #3b3b38;
        --background-darker: #2B2B28;
        --text-light: #ffffff;
        --text-muted: rgba(255, 255, 255, 0.7);
        --text-dim: rgba(255, 255, 255, 0.5);
        --border-color: rgba(255, 255, 255, 0.1);
        --whatsapp-green: #b8911f;
        --shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 clamp(1rem, 4vw, 2rem);
    }

    /* Modern Footer Styles */
    .footer {
        background: #2B2B28;
        color: var(--text-light);
        padding: clamp(2rem, 6vw, 4rem) 0 clamp(1rem, 3vw, 2rem);
        margin-top: 2rem;
        position: relative;
        overflow: hidden;
        height: 35em;
    }

    .footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 1px;
        background: linear-gradient(90deg, transparent, var(--primary-color), transparent);
    }

    .footer-content {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(min(280px, 100%), 1fr));
        gap: clamp(1.5rem, 4vw, 3rem);
        margin-bottom: clamp(2rem, 4vw, 3rem);
    }

    .footer-section {
        opacity: 0;
        animation: fadeInUp 0.6s ease forwards;
        min-width: 0; /* Prevents overflow in flex/grid items */
    }

    .footer-section:nth-child(1) { animation-delay: 0.1s; }
    .footer-section:nth-child(2) { animation-delay: 0.2s; }
    .footer-section:nth-child(3) { animation-delay: 0.3s; }

    .footer-section h3 {
        font-size: clamp(1.25rem, 3vw, 1.5rem);
        margin-bottom: 1.5rem;
        background: linear-gradient(45deg, var(--primary-color), #fff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        line-height: 1.2;
        word-break: break-word;
    }

    .footer-section h4 {
        font-size: clamp(1.1rem, 2.5vw, 1.2rem);
        margin-bottom: 1rem;
        color: var(--text-light);
        line-height: 1.3;
    }

    .footer-section p {
        color: var(--text-muted);
        line-height: 1.6;
        margin-bottom: 1rem;
        font-size: clamp(0.9rem, 2vw, 1rem);
        word-wrap: break-word;
    }

    .footer-section a {
        color: var(--primary-color);
        text-decoration: none;
        transition: var(--transition);
        position: relative;
        word-break: break-word;
    }

    .footer-section a::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 0;
        height: 2px;
        background: var(--primary-color);
        transition: width 0.3s ease;
    }

    .footer-section a:hover::after {
        width: 100%;
    }

    .footer-section a:hover {
        color: var(--text-light);
    }

    /* Social Links */
    .social-links {
        list-style: none;
        display: flex;
        flex-wrap: wrap;
        gap: clamp(0.5rem, 2vw, 1rem);
        margin: 0;
        padding: 0;
        justify-content: flex-start;
    }

    .social-link {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: clamp(40px, 8vw, 45px);
        height: clamp(40px, 8vw, 45px);
        background: rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        color: var(--text-muted);
        text-decoration: none;
        transition: var(--transition);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        flex-shrink: 0;
    }

    .social-link:hover {
        background: var(--primary-color);
        color: var(--text-light);
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(212, 166, 40, 0.3);
    }

    .social-link svg {
        width: clamp(16px, 4vw, 20px);
        height: clamp(16px, 4vw, 20px);
    }

    /* Team List */
    .team-list {
        list-style: none;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(min(180px, 100%), 1fr));
        gap: clamp(0.3rem, 1vw, 0.5rem);
        font-size: clamp(0.8rem, 1.8vw, 0.9rem);
        margin: 0;
        padding: 0;
    }

    .team-member {
        padding: clamp(0.4rem, 1vw, 0.5rem) clamp(0.6rem, 1.5vw, 0.8rem);
        background: rgba(255, 255, 255, 0.05);
        border-radius: 6px;
        border-left: 2px solid var(--primary-color);
        transition: var(--transition);
        min-width: 0;
    }

    .team-member:hover {
        background: rgba(255, 255, 255, 0.1);
        transform: translateX(3px);
    }

    .team-member a {
        color: var(--text-light);
        font-weight: 500;
        font-size: clamp(0.8rem, 1.8vw, 0.9rem);
        text-decoration: none;
        word-break: break-word;
        display: block;
    }

    .team-role {
        color: var(--text-dim);
        font-size: clamp(0.7rem, 1.5vw, 0.8rem);
        margin-top: 0.2rem;
        line-height: 1.2;
        word-break: break-word;
    }

    /* Footer Legal */
    .footer-legal {
        text-align: center;
        padding-top: clamp(1rem, 3vw, 2rem);
        border-top: 1px solid var(--border-color);
        color: var(--text-dim);
        font-size: clamp(0.8rem, 1.8vw, 0.9rem);
        line-height: 1.4;
    }

    /* WhatsApp Button */
    .whatsapp-btn {
        position: fixed;
        bottom: clamp(3rem, 7vw, 5rem);
        right: clamp(1rem, 3vw, 2rem);
        width: clamp(50px, 12vw, 60px);
        height: clamp(50px, 12vw, 60px);
        background: var(--whatsapp-green);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1000;
        transition: var(--transition);
        animation: pulse 3s infinite;
        text-decoration: none;
        border: none;
        cursor: pointer;
    }

    .hidden {
    display: none !important;
}

.whatsapp-btn:hover {
  transform: scale(1.1);
}


    .whatsapp-btn svg {
        width: clamp(24px, 6vw, 30px);
        height: clamp(24px, 6vw, 30px);
        fill: white;
    }

    /* Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }

    /* Responsive Breakpoints */
    
    /* Large screens (1200px and up) */
    @media (min-width: 1200px) {
        .footer-content {
            grid-template-columns: 1fr 1fr 1fr;
        }
        
        .social-links {
            justify-content: flex-start;
        }
        
        .team-list {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    /* Medium screens (768px to 1199px) */
    @media (min-width: 768px) and (max-width: 1199px) {
        .footer-content {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .footer-section:nth-child(3) {
            grid-column: 1 / -1;
        }
        
        .social-links {
            justify-content: flex-start;
        }
        
        .team-list {
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            max-width: 100%;
        }
    }

    /* Small screens (481px to 767px) */
    @media (min-width: 481px) and (max-width: 767px) {
    .footer {
        padding: 2.5rem 0 1.5rem;
        height: 50em;
    }
        
        .footer-content {
            grid-template-columns: 1fr;
            gap: 2rem;
        }
        
        .social-links {
            justify-content: center;
            gap: 1rem;
        }
        
        .team-list {
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
        }
        
        .footer-section h3 {
            text-align: center;
        }
        
        .footer-section:first-child p {
            text-align: center;
        }
    }

    /* Extra small screens (up to 480px) */
    @media (max-width: 480px) {
        .container {
            padding: 0 1rem;
        }
        
        .footer {
            padding: 2rem 0 1rem;
        }
        
        .footer-content {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
        
        .footer-section {
            text-align: center;
        }
        
        .footer-section h3 {
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }
        
        .footer-section h4 {
            font-size: 1rem;
            margin-bottom: 0.8rem;
        }
        
        .footer-section p {
            font-size: 0.9rem;
            margin-bottom: 0.8rem;
        }
        
        .social-links {
            justify-content: center;
            gap: 0.8rem;
        }
        
        .social-link {
            width: 42px;
            height: 42px;
        }
        
        .team-list {
            grid-template-columns: 1fr;
            gap: 0.4rem;
            max-width: 280px;
            margin: 0 auto;
        }
        
        .team-member {
            padding: 0.6rem;
            text-align: left;
        }
        
        .whatsapp-btn {
            width: 50px;
            height: 50px;
            bottom: 1rem;
            right: 1rem;
        }
        
        .whatsapp-btn svg {
            width: 24px;
            height: 24px;
        }
    }

    /* Ultra small screens (up to 320px) */
    @media (max-width: 320px) {
        .container {
            padding: 0 0.75rem;
        }
        
        .footer-section h3 {
            font-size: 1.1rem;
        }
        
        .footer-section h4 {
            font-size: 0.95rem;
        }
        
        .footer-section p {
            font-size: 0.85rem;
        }
        
        .social-link {
            width: 38px;
            height: 38px;
        }
        
        .social-link svg {
            width: 16px;
            height: 16px;
        }
        
        .team-list {
            max-width: 250px;
        }
        
        .team-member a {
            font-size: 0.85rem;
        }
        
        .team-role {
            font-size: 0.75rem;
        }
    }

    /* Landscape orientation on mobile */
    @media (max-height: 500px) and (orientation: landscape) {
        .footer {
            padding: 1.5rem 0 1rem;
        }
        
        .footer-content {
            gap: 1.5rem;
        }
        
        .whatsapp-btn {
            width: 45px;
            height: 45px;
            bottom: 0.5rem;
            right: 0.5rem;
        }
        
        .whatsapp-btn svg {
            width: 22px;
            height: 22px;
        }
    }

    /* High DPI displays */
    @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
        .footer::before {
            height: 0.5px;
        }
    }

    /* Touch devices */
    @media (hover: none) and (pointer: coarse) {
        .social-link:hover {
            transform: none;
        }
        
        .team-member:hover {
            transform: none;
        }
        
        .whatsapp-btn:hover {
            transform: none;
        }
        
        .social-link:active {
            transform: scale(0.95);
        }
        
        .team-member:active {
            transform: translateX(3px);
        }
        
        .whatsapp-btn:active {
            transform: scale(0.95);
        }
    }

    /* Dark mode support */
    @media (prefers-color-scheme: dark) {
        :root {
            --background-dark: #0a0a0a;
            --background-darker: #000000;
        }
    }

    /* Reduced motion support */
    @media (prefers-reduced-motion: reduce) {
        * {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.01ms !important;
        }
        
        .whatsapp-btn {
            animation: none;
        }
    }

    /* Print styles */
    @media print {
        .footer {
            background: none !important;
            color: #000 !important;
            box-shadow: none !important;
        }
        
        .whatsapp-btn {
            display: none !important;
        }
        
        .social-links {
            display: none !important;
        }
        
        .footer-section a {
            color: #000 !important;
            text-decoration: underline !important;
        }
    }

    /* Extra small screens (up to 480px) */
@media (max-width: 480px) {
    .footer {
        padding: 2rem 0 1rem;
        height: auto;
    }

    .footer-content {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }

    .footer-section h3 {
        font-size: 1.2rem;
        text-align: center;
    }

    .footer-section p {
        text-align: center;
    }

    .team-list {
        grid-template-columns: 1fr;
        justify-items: center;
    }

    .social-links {
        justify-content: center;
        gap: 0.75rem;
    }

    .whatsapp-btn {
        bottom: 1.5rem;
        right: 1rem;
    }

    .footer-legal {
        font-size: 0.75rem;
        padding-top: 1.5rem;
    }
}

</style>

<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <!-- Brand Section -->
            <div class="footer-section">
                <h3> Jose Carlos Herrera</h3>
                <div class="social-links">
                    <?php
                    // Get social media links from WordPress Customizer or theme options
                    $instagram_url = get_theme_mod('https://www.instagram.com/patrondecorsetamedida?igsh=MXdid240cXA3bmlvYw==', '#');
                   $instagram_url = get_theme_mod('https://www.instagram.com/moulagetecnico?igsh=MXh6NGFrMXg5ZWYxeA%3D%3D', '#');
                    ?>
                    <a href="<?php echo esc_url('https://www.instagram.com/moulagetecnico?igsh=MXh6NGFrMXg5ZWYxeA%3D%3D'); ?>" class="social-link" aria-label="Instagram" target="_blank" rel="noopener noreferrer">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="<?php echo esc_url('https://www.instagram.com/moulagetecnico?igsh=MXh6NGFrMXg5ZWYxeA%3D%3D'); ?>" class="social-link" aria-label="Instagram" target="_blank" rel="noopener noreferrer">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Project Info -->
            <div class="footer-section">
                <h4>💻 Proyecto Final de Desarrollo Web</h4>
                <p>Desarrollado por programadores recién graduados en colaboración con la <a href="https://ceaformacion.com/" target="_blank" rel="noopener noreferrer">Escuela CEA</a>.</p>
                <p>Curso impartido por <strong>LANBIDE – Servicio Vasco de Empleo</strong> y financiado por la <strong>Unión Europea</strong>.</p>
                <p><strong>Formador:</strong> <a href="https://www.linkedin.com/in/ikeralvarezformador/" target="_blank" rel="noopener noreferrer">Iker Álvarez</a></p>
            </div>

            <!-- Team -->
            <div class="footer-section">
                <h4>👨‍💻 Equipo de desarrollo</h4>
                <ul class="team-list">
                    <?php
                    // Team members array - you can move this to theme options or custom fields
                    $team_members = [
                        ['name' => 'Niño', 'role' => 'DevOps Engineer', 'url' => '#'],
                        ['name' => 'Adrian', 'role' => 'eCommerce Content Manager', 'url' => '#'],
                        ['name' => 'Axel A', 'role' => 'Front-End Developer (JS)', 'url' => '#'],
                        ['name' => 'Axel S', 'role' => 'UI/UX Designer & Front-End Dev', 'url' => '#'],
                        ['name' => 'Carol', 'role' => 'Compliance & Data Protection', 'url' => '#'],
                        ['name' => 'Blanca', 'role' => 'QA Tester', 'url' => '#'],
                        ['name' => 'Dominguito', 'role' => 'Project Manager & Brand Designer', 'url' => '#'],
                    ];

                    foreach ($team_members as $member) :
                    ?>
                    <li class="team-member">
                        <a href="<?php echo esc_url($member['url']); ?>" target="_blank" rel="noopener noreferrer">
                            <?php echo esc_html($member['name']); ?>
                        </a>
                        <div class="team-role"><?php echo esc_html($member['role']); ?></div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <div class="footer-legal">
            <p>&copy; <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?>. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>

<!-- WhatsApp Button -->
<?php
$whatsapp_number = get_theme_mod('whatsapp_number', '34636974576');
$whatsapp_message = get_theme_mod('whatsapp_message', 'Hola, me interesa vuestro servicio');
?>
<a href="https://wa.me/<?php echo esc_attr($whatsapp_number); ?>?text=<?php echo urlencode($whatsapp_message); ?>" 
   class="whatsapp-btn hidden" 
   target="_blank" 
   rel="noopener noreferrer" 
   aria-label="Contactar por WhatsApp">
    <svg viewBox="0 0 24 24" fill="currentColor">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
    </svg>
</a>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const footer = document.querySelector(".footer");
    const whatsappBtn = document.querySelector(".whatsapp-btn");

    if (footer && whatsappBtn) {
      const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            whatsappBtn.classList.remove("hidden");
          } else {
            whatsappBtn.classList.add("hidden");
          }
        });
      }, { threshold: 0.1 });

      observer.observe(footer);
    }
  });

document.addEventListener('DOMContentLoaded', function() {
    // Add smooth scroll behavior
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = 'running';
            }
        });
    }, observerOptions);

    document.querySelectorAll('.footer-section').forEach(section => {
        observer.observe(section);
    });
});
</script>

<?php wp_footer(); ?>
</body>
</html>