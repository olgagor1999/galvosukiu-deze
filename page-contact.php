<?php
/**
 * Template Name: Contact Page
 * Description: A custom template for the contact page.
 */

get_header(); ?>

<?php get_template_part('template-parts/cover'); // Include the reusable cover section ?>

<section class="contact-page-wrapper">
    <div class="contact-page-container">
        <div class="contact-left">
            <p class="firm-name">Paslapties Kodas</p>
            <p class="contact-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-icon.png" alt="Phone Icon" class="contact-icon">
                <a href="tel:+1234567890">+370 6762 2085</a>
            </p>
            <p class="contact-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/email.png" alt="Email Icon" class="contact-icon">
                <a href="mailto:info@example.com">info@galvosukiu-dezes.lt</a>
            </p>
            <p class="contact-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/time.png" alt="Working Hours Icon" class="contact-icon">
                Pirm-Sekm: 8:00 AM - 20:00 PM
            </p>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=YOUR_MAP_EMBED_CODE" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>


        <div class="contact-right">
            <h2>Galvosūkių dėžės rezervacija</h2>
                <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" class="contact-form">
                <input type="hidden" name="action" value="submit_contact_form">
                <!-- Name Field -->
                <label for="name">Vardas *</label>
                <input type="text" id="name" name="name" placeholder="Įveskite savo vardą" required>

                <!-- Phone Number Field -->
                <label for="phone">Telefono nr. *</label>
                <input type="tel" id="phone" name="phone" placeholder="Įveskite savo telefono numerį" required>

                <!-- Email Field -->
                <label for="email">El. paštas *</label>
                <input type="email" id="email" name="email" placeholder="Įveskite savo el. paštą" required>

                <!-- Delivery Date Field -->
                <label for="delivery-date">Pasirinkite pristatymo dieną *</label>
                <input type="date" id="delivery-date" name="delivery-date" required>

                <!-- Delivery Time Field -->
                <label for="delivery-time">Pasirinkite pristatymo laiką *</label>
                <input type="time" id="delivery-time" name="delivery-time" placeholder="Įveskite laiką">

                <!-- Gift Placement Field -->
                <label for="gift-placement">Ar reikalingas dovanos įdėjimas į paskutinį galvosūkį (8*2.5 cm)</label>
                <select id="gift-placement" name="gift-placement">
                    <option value="" disabled selected>Pasirinkite</option>
                    <option value="taip">Taip</option>
                    <option value="ne">Ne</option>
                    <option value="dar-nezino">Dar nežinau</option>
                </select>

                <!-- Delivery Option Field -->
                <label for="delivery-option">Pristatymas *</label>
                <select id="delivery-option" name="delivery-option" required>
                    <option value="" disabled selected>Pasirinkite pristatymo būdą</option>
                    <option value="delivery">Pristatymas į jūsų pasirinktą vietą</option>
                    <option value="pickup">Atsimsiu pats Vilniuje</option>
                </select>

                <!-- Delivery Address Field (Conditional) -->
                <div id="delivery-address-container" style="display: none;">
                    <label for="delivery-address">Pristatymo adresas</label>
                    <input type="text" id="delivery-address" name="delivery-address" placeholder="Įveskite pristatymo adresą">
                </div>

                <!-- Payment Option Field -->
                <label for="payment-option">Apmokėjimas *</label>
                <select id="payment-option" name="payment-option" required>
                    <option value="" disabled selected>Pasirinkite apmokėjimo būdą</option>
                    <option value="cash">Grynais</option>
                    <option value="bank-transfer">Pavedimu (sąskaitą gausite el. paštu)</option>
                </select>

                <!-- Agreement Fields -->
                <div class="agreement">
                    <label>
                        <input type="checkbox" name="privacy-policy" required>
                        Sutinku su privatumo politika.
                    </label>
                    <label>
                        <input type="checkbox" name="reservation-notice" required>
                        Užklausos formos užpildymas negarantuoja galvosūkių dėžės rezervacijos. Su Jumis susisieks Paslapties Kodas, kad suderintų rezervaciją telefonu.
                    </label>
                </div>

                <!-- Submit Button -->
                <button type="submit">Siųsti užklausą</button>
            </form>
        </div>
    </div>
</section>
<?php if (isset($_GET['form_submitted']) && $_GET['form_submitted'] === 'true') : ?>
    <p class="success-message">Dėkojame. Jūsų forma sėkmingai gauta. Netrukus su Jumis susisieksime!</p>
<?php endif; ?>

<?php get_footer(); ?>