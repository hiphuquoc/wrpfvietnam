<style type='text/css'> :root {
	--wp--preset--aspect-ratio--square: 1;
	--wp--preset--aspect-ratio--4-3: 4/3;
	--wp--preset--aspect-ratio--3-4: 3/4;
	--wp--preset--aspect-ratio--3-2: 3/2;
	--wp--preset--aspect-ratio--2-3: 2/3;
	--wp--preset--aspect-ratio--16-9: 16/9;
	--wp--preset--aspect-ratio--9-16: 9/16;
	--wp--preset--color--black: #000000;
	--wp--preset--color--cyan-bluish-gray: #abb8c3;
	--wp--preset--color--white: #ffffff;
	--wp--preset--color--pale-pink: #f78da7;
	--wp--preset--color--vivid-red: #cf2e2e;
	--wp--preset--color--luminous-vivid-orange: #ff6900;
	--wp--preset--color--luminous-vivid-amber: #fcb900;
	--wp--preset--color--light-green-cyan: #7bdcb5;
	--wp--preset--color--vivid-green-cyan: #00d084;
	--wp--preset--color--pale-cyan-blue: #8ed1fc;
	--wp--preset--color--vivid-cyan-blue: #0693e3;
	--wp--preset--color--vivid-purple: #9b51e0;
	--wp--preset--color--bg-color: #f1ede1;
	--wp--preset--color--bd-color: #cac5b6;
	--wp--preset--color--text: #5b5853;
	--wp--preset--color--text-dark: #16120f;
	--wp--preset--color--text-light: #5b5853;
	--wp--preset--color--text-link: #16120f;
	--wp--preset--color--text-hover: #d72323;
	--wp--preset--color--text-link-2: #16120f;
	--wp--preset--color--text-hover-2: #d72323;
	--wp--preset--color--text-link-3: #be2424;
	--wp--preset--color--text-hover-3: #625f5a;
	--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
	--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
	--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
	--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
	--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
	--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
	--wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
	--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
	--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
	--wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
	--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
	--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
	--wp--preset--font-size--small: 13px;
	--wp--preset--font-size--medium: 20px;
	--wp--preset--font-size--large: 36px;
	--wp--preset--font-size--x-large: 42px;
	--wp--preset--font-family--inter: "Inter", sans-serif;
	--wp--preset--font-family--cardo: Cardo;
	--wp--preset--spacing--20: 0.44rem;
	--wp--preset--spacing--30: 0.67rem;
	--wp--preset--spacing--40: 1rem;
	--wp--preset--spacing--50: 1.5rem;
	--wp--preset--spacing--60: 2.25rem;
	--wp--preset--spacing--70: 3.38rem;
	--wp--preset--spacing--80: 5.06rem;
	--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
	--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
	--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
	--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
	--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
}

:where(.is-layout-flex) {
	gap: 0.5em;
}

:where(.is-layout-grid) {
	gap: 0.5em;
}

body .is-layout-flex {
	display: flex;
}

.is-layout-flex {
	flex-wrap: wrap;
	align-items: center;
}

.is-layout-flex> :is(*, div) {
	margin: 0;
}

body .is-layout-grid {
	display: grid;
}

.is-layout-grid> :is(*, div) {
	margin: 0;
}

:where(.wp-block-columns.is-layout-flex) {
	gap: 2em;
}

:where(.wp-block-columns.is-layout-grid) {
	gap: 2em;
}

:where(.wp-block-post-template.is-layout-flex) {
	gap: 1.25em;
}

:where(.wp-block-post-template.is-layout-grid) {
	gap: 1.25em;
}

.has-black-color {
	color: var(--wp--preset--color--black) !important;
}

.has-cyan-bluish-gray-color {
	color: var(--wp--preset--color--cyan-bluish-gray) !important;
}

.has-white-color {
	color: var(--wp--preset--color--white) !important;
}

.has-pale-pink-color {
	color: var(--wp--preset--color--pale-pink) !important;
}

.has-vivid-red-color {
	color: var(--wp--preset--color--vivid-red) !important;
}

.has-luminous-vivid-orange-color {
	color: var(--wp--preset--color--luminous-vivid-orange) !important;
}

.has-luminous-vivid-amber-color {
	color: var(--wp--preset--color--luminous-vivid-amber) !important;
}

.has-light-green-cyan-color {
	color: var(--wp--preset--color--light-green-cyan) !important;
}

.has-vivid-green-cyan-color {
	color: var(--wp--preset--color--vivid-green-cyan) !important;
}

.has-pale-cyan-blue-color {
	color: var(--wp--preset--color--pale-cyan-blue) !important;
}

.has-vivid-cyan-blue-color {
	color: var(--wp--preset--color--vivid-cyan-blue) !important;
}

.has-vivid-purple-color {
	color: var(--wp--preset--color--vivid-purple) !important;
}

.has-black-background-color {
	background-color: var(--wp--preset--color--black) !important;
}

.has-cyan-bluish-gray-background-color {
	background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
}

.has-white-background-color {
	background-color: var(--wp--preset--color--white) !important;
}

.has-pale-pink-background-color {
	background-color: var(--wp--preset--color--pale-pink) !important;
}

.has-vivid-red-background-color {
	background-color: var(--wp--preset--color--vivid-red) !important;
}

.has-luminous-vivid-orange-background-color {
	background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
}

.has-luminous-vivid-amber-background-color {
	background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
}

.has-light-green-cyan-background-color {
	background-color: var(--wp--preset--color--light-green-cyan) !important;
}

.has-vivid-green-cyan-background-color {
	background-color: var(--wp--preset--color--vivid-green-cyan) !important;
}

.has-pale-cyan-blue-background-color {
	background-color: var(--wp--preset--color--pale-cyan-blue) !important;
}

.has-vivid-cyan-blue-background-color {
	background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
}

.has-vivid-purple-background-color {
	background-color: var(--wp--preset--color--vivid-purple) !important;
}

.has-black-border-color {
	border-color: var(--wp--preset--color--black) !important;
}

.has-cyan-bluish-gray-border-color {
	border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
}

.has-white-border-color {
	border-color: var(--wp--preset--color--white) !important;
}

.has-pale-pink-border-color {
	border-color: var(--wp--preset--color--pale-pink) !important;
}

.has-vivid-red-border-color {
	border-color: var(--wp--preset--color--vivid-red) !important;
}

.has-luminous-vivid-orange-border-color {
	border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
}

.has-luminous-vivid-amber-border-color {
	border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
}

.has-light-green-cyan-border-color {
	border-color: var(--wp--preset--color--light-green-cyan) !important;
}

.has-vivid-green-cyan-border-color {
	border-color: var(--wp--preset--color--vivid-green-cyan) !important;
}

.has-pale-cyan-blue-border-color {
	border-color: var(--wp--preset--color--pale-cyan-blue) !important;
}

.has-vivid-cyan-blue-border-color {
	border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
}

.has-vivid-purple-border-color {
	border-color: var(--wp--preset--color--vivid-purple) !important;
}

.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
	background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
}

.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
	background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
}

.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
	background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
}

.has-luminous-vivid-orange-to-vivid-red-gradient-background {
	background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
}

.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
	background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
}

.has-cool-to-warm-spectrum-gradient-background {
	background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
}

.has-blush-light-purple-gradient-background {
	background: var(--wp--preset--gradient--blush-light-purple) !important;
}

.has-blush-bordeaux-gradient-background {
	background: var(--wp--preset--gradient--blush-bordeaux) !important;
}

.has-luminous-dusk-gradient-background {
	background: var(--wp--preset--gradient--luminous-dusk) !important;
}

.has-pale-ocean-gradient-background {
	background: var(--wp--preset--gradient--pale-ocean) !important;
}

.has-electric-grass-gradient-background {
	background: var(--wp--preset--gradient--electric-grass) !important;
}

.has-midnight-gradient-background {
	background: var(--wp--preset--gradient--midnight) !important;
}

.has-small-font-size {
	font-size: var(--wp--preset--font-size--small) !important;
}

.has-medium-font-size {
	font-size: var(--wp--preset--font-size--medium) !important;
}

.has-large-font-size {
	font-size: var(--wp--preset--font-size--large) !important;
}

.has-x-large-font-size {
	font-size: var(--wp--preset--font-size--x-large) !important;
}

:where(.wp-block-post-template.is-layout-flex) {
	gap: 1.25em;
}

:where(.wp-block-post-template.is-layout-grid) {
	gap: 1.25em;
}

:where(.wp-block-columns.is-layout-flex) {
	gap: 2em;
}

:where(.wp-block-columns.is-layout-grid) {
	gap: 2em;
}

:root :where(.wp-block-pullquote) {
	font-size: 1.5em;
	line-height: 1.6;
}

img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 0.07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}

/*! This file is auto-generated */
.wp-block-button__link {
	color: #fff;
	background-color: #32373c;
	border-radius: 9999px;
	box-shadow: none;
	text-decoration: none;
	padding: calc(.667em + 2px) calc(1.333em + 2px);
	font-size: 1.125em
}

.wp-block-file__button {
	background: #32373c;
	color: #fff;
	text-decoration: none
}

#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td a.ui-state-active,
#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td a.ui-state-active:hover,
body #booked-profile-page input[type=submit].button-primary:hover,
body .booked-list-view button.button:hover,
body .booked-list-view input[type=submit].button-primary:hover,
body div.booked-calendar input[type=submit].button-primary:hover,
body .booked-modal input[type=submit].button-primary:hover,
body div.booked-calendar .bc-head,
body div.booked-calendar .bc-head .bc-col,
body div.booked-calendar .booked-appt-list .timeslot .timeslot-people button:hover,
body #booked-profile-page .booked-profile-header,
body #booked-profile-page .booked-tabs li.active a,
body #booked-profile-page .booked-tabs li.active a:hover,
body #booked-profile-page .appt-block .google-cal-button>a:hover,
#ui-datepicker-div.booked_custom_date_picker .ui-datepicker-header {
	background: #f1ede1 !important;
}

body #booked-profile-page input[type=submit].button-primary:hover,
body div.booked-calendar input[type=submit].button-primary:hover,
body .booked-list-view button.button:hover,
body .booked-list-view input[type=submit].button-primary:hover,
body .booked-modal input[type=submit].button-primary:hover,
body div.booked-calendar .bc-head .bc-col,
body div.booked-calendar .booked-appt-list .timeslot .timeslot-people button:hover,
body #booked-profile-page .booked-profile-header,
body #booked-profile-page .appt-block .google-cal-button>a:hover {
	border-color: #f1ede1 !important;
}

body div.booked-calendar .bc-row.days,
body div.booked-calendar .bc-row.days .bc-col,
body .booked-calendarSwitcher.calendar,
body #booked-profile-page .booked-tabs,
#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar thead,
#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar thead th {
	background: #e9e5d8 !important;
}

body div.booked-calendar .bc-row.days .bc-col,
body #booked-profile-page .booked-tabs {
	border-color: #e9e5d8 !important;
}

#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td.ui-datepicker-today a,
#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td.ui-datepicker-today a:hover,
body #booked-profile-page input[type=submit].button-primary,
body div.booked-calendar input[type=submit].button-primary,
body .booked-list-view button.button,
body .booked-list-view input[type=submit].button-primary,
body .booked-list-view button.button,
body .booked-list-view input[type=submit].button-primary,
body .booked-modal input[type=submit].button-primary,
body div.booked-calendar .booked-appt-list .timeslot .timeslot-people button,
body #booked-profile-page .booked-profile-appt-list .appt-block.approved .status-block,
body #booked-profile-page .appt-block .google-cal-button>a,
body .booked-modal p.booked-title-bar,
body div.booked-calendar .bc-col:hover .date span,
body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active,
body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active:hover,
.booked-ms-modal .booked-book-appt,
body #booked-profile-page .booked-tabs li a .counter {
	background: #e9e5d8;
}

body #booked-profile-page input[type=submit].button-primary,
body div.booked-calendar input[type=submit].button-primary,
body .booked-list-view button.button,
body .booked-list-view input[type=submit].button-primary,
body .booked-list-view button.button,
body .booked-list-view input[type=submit].button-primary,
body .booked-modal input[type=submit].button-primary,
body #booked-profile-page .appt-block .google-cal-button>a,
body div.booked-calendar .booked-appt-list .timeslot .timeslot-people button,
body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active,
body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active:hover {
	border-color: #e9e5d8;
}

body .booked-modal .bm-window p i.fa,
body .booked-modal .bm-window a,
body .booked-appt-list .booked-public-appointment-title,
body .booked-modal .bm-window p.appointment-title,
.booked-ms-modal.visible:hover .booked-book-appt {
	color: #e9e5d8;
}

.booked-appt-list .timeslot.has-title .booked-public-appointment-title {
	color: inherit;
}

.woocommerce form .form-row .required {
	visibility: visible;
}

.elementor-kit-3991 {
	--e-global-color-primary: #6EC1E4;
	--e-global-color-secondary: #54595F;
	--e-global-color-text: #7A7A7A;
	--e-global-color-accent: #61CE70;
	--e-global-typography-primary-font-family: "Roboto";
	--e-global-typography-primary-font-weight: 600;
	--e-global-typography-secondary-font-family: "Roboto Slab";
	--e-global-typography-secondary-font-weight: 400;
	--e-global-typography-text-font-family: "Roboto";
	--e-global-typography-text-font-weight: 400;
	--e-global-typography-accent-font-family: "Roboto";
	--e-global-typography-accent-font-weight: 500;
}

.elementor-section.elementor-section-boxed>.elementor-container {
	max-width: 1308px;
}

.e-con {
	--container-max-width: 1308px;
}

.elementor-widget:not(:last-child) {
	margin-block-end: 20px;
}

.elementor-element {
	--widgets-spacing: 20px 20px;
}

	{}

h1.entry-title {
	display: var(--page-title-display);
}

@media(max-width:1024px) {
	.elementor-section.elementor-section-boxed>.elementor-container {
		max-width: 1024px;
	}

	.e-con {
		--container-max-width: 1024px;
	}
}

@media(max-width:767px) {
	.elementor-section.elementor-section-boxed>.elementor-container {
		max-width: 767px;
	}

	.e-con {
		--container-max-width: 767px;
	}
}

.elementor-2904 .elementor-element.elementor-element-a67d9ad {
	-ms-flex-pack: inherit;
	-webkit-justify-content: inherit;
	justify-content: inherit;
}

.elementor-2904 .elementor-element.elementor-element-a8f8d09 {
	padding: 131px 0px 0px 0px;
}

.elementor-2904 .elementor-element.elementor-element-c2c7803 {
	-ms-flex-pack: inherit;
	-webkit-justify-content: inherit;
	justify-content: inherit;
}

.elementor-2904 .elementor-element.elementor-element-3ab6c6a {
	--spacer-size: 18px;
}

.elementor-2904 .elementor-element.elementor-element-01103d2 {
	text-align: center;
}

.elementor-2904 .elementor-element.elementor-element-01103d2>.elementor-widget-container {
	padding: 0px 105px 0px 105px;
}

.elementor-2904 .elementor-element.elementor-element-d2caf5d {
	--spacer-size: 27px;
}

.elementor-2904 .elementor-element.elementor-element-e47fc76:not(.elementor-motion-effects-element-type-background),
.elementor-2904 .elementor-element.elementor-element-e47fc76>.elementor-motion-effects-container>.elementor-motion-effects-layer {
	background-color: #E9E5D800;
}

.elementor-2904 .elementor-element.elementor-element-e47fc76 {
	transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
	padding: 150px 0px 0px 0px;
}

.elementor-2904 .elementor-element.elementor-element-e47fc76>.elementor-background-overlay {
	transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
}

.elementor-2904 .elementor-element.elementor-element-065aba8 {
	-ms-flex-pack: inherit;
	-webkit-justify-content: inherit;
	justify-content: inherit;
}

.elementor-2904 .elementor-element.elementor-element-065aba8>.elementor-element-populated.elementor-column-wrap {
	padding: 0px 40px 0px 15px;
}

.elementor-2904 .elementor-element.elementor-element-065aba8>.elementor-element-populated.elementor-widget-wrap {
	padding: 0px 40px 0px 15px;
}

.elementor-2904 .elementor-element.elementor-element-4500234 {
	text-align: left;
}

.elementor-2904 .elementor-element.elementor-element-ccb1071 {
	-ms-flex-pack: inherit;
	-webkit-justify-content: inherit;
	justify-content: inherit;
	z-index: 5;
}

.elementor-2904 .elementor-element.elementor-element-ccb1071>.elementor-element-populated.elementor-column-wrap {
	padding: 0px 15px 0px 15px;
}

.elementor-2904 .elementor-element.elementor-element-ccb1071>.elementor-element-populated.elementor-widget-wrap {
	padding: 0px 15px 0px 15px;
}

.elementor-2904 .elementor-element.elementor-element-8c7cfe0 {
	--spacer-size: 79px;
}

.elementor-2904 .elementor-element.elementor-element-e1d23b7 {
	--spacer-size: 21px;
}

.elementor-2904 .elementor-element.elementor-element-cd75fdf>.elementor-widget-container {
	padding: 0% 15% 0% 0%;
}

.elementor-2904 .elementor-element.elementor-element-41b622d {
	--spacer-size: 52px;
}

.elementor-2904 .elementor-element.elementor-element-005ff96:not(.elementor-motion-effects-element-type-background),
.elementor-2904 .elementor-element.elementor-element-005ff96>.elementor-motion-effects-container>.elementor-motion-effects-layer {
	background-image: url("https://rumble.ancorathemes.com/wp-content/uploads/2020/09/shutterstock_516217204-copyright.jpg");
	background-position: center center;
	background-repeat: no-repeat;
	background-size: cover;
}

.elementor-2904 .elementor-element.elementor-element-005ff96>.elementor-background-overlay {
	background-color: #000000;
	opacity: 0.28;
	transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
}

.elementor-2904 .elementor-element.elementor-element-005ff96 {
	transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
	padding: 292px 46px 54px 31px;
}

.elementor-2904 .elementor-element.elementor-element-cc53cc7 {
	-ms-flex-pack: inherit;
	-webkit-justify-content: inherit;
	justify-content: inherit;
}

.elementor-2904 .elementor-element.elementor-element-6e6ccb7:not(.elementor-motion-effects-element-type-background),
.elementor-2904 .elementor-element.elementor-element-6e6ccb7>.elementor-motion-effects-container>.elementor-motion-effects-layer {
	background-image: url("https://wrpfvietnam.storage.googleapis.com/storage/images/karate-back.webp");
	background-position: top center;
	background-repeat: no-repeat;
	background-size: cover;
}

.elementor-2904 .elementor-element.elementor-element-6e6ccb7 {
	transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
	margin-top: 0px;
	margin-bottom: 0px;
	padding: 130px 0px 130px 0px;
	margin: 130px 0px 130px 0px;
}

.elementor-2904 .elementor-element.elementor-element-6e6ccb7>.elementor-background-overlay {
	transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
}

.elementor-2904 .elementor-element.elementor-element-3453daf {
	-ms-flex-pack: inherit;
	-webkit-justify-content: inherit;
	justify-content: inherit;
}

.elementor-2904 .elementor-element.elementor-element-4ed8098 {
	--spacer-size: 51px;
}

.elementor-2904 .elementor-element.elementor-element-a508946 {
	-ms-flex-pack: inherit;
	-webkit-justify-content: inherit;
	justify-content: inherit;
}

.elementor-2904 .elementor-element.elementor-element-c050517 {
	--spacer-size: 40px;
}

.elementor-2904 .elementor-element.elementor-element-5d3e7e4 {
	padding: 130px 0px 130px 0px;
}

.elementor-2904 .elementor-element.elementor-element-a77ad28 {
	-ms-flex-pack: inherit;
	-webkit-justify-content: inherit;
	justify-content: inherit;
}

.elementor-2904 .elementor-element.elementor-element-38bb30c {
	--spacer-size: 32px;
}

.elementor-2904 .elementor-element.elementor-element-c75f47f {
	--spacer-size: 17px;
}

.elementor-2904 .elementor-element.elementor-element-605a2af {
	padding: 0px 0px 0px 0px;
}

.elementor-2904 .elementor-element.elementor-element-b71ef40 {
	-ms-flex-pack: inherit;
	-webkit-justify-content: inherit;
	justify-content: inherit;
}

.elementor-2904 .elementor-element.elementor-element-017fb78 {
	border-style: solid;
	transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
	padding: 0px 0px 110px 0px;
}

.elementor-2904 .elementor-element.elementor-element-017fb78>.elementor-background-overlay {
	transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
}

.elementor-2904 .elementor-element.elementor-element-b7ca53f {
	-ms-flex-pack: inherit;
	-webkit-justify-content: inherit;
	justify-content: inherit;
}

.elementor-2904 .elementor-element.elementor-element-b7ca53f>.elementor-element-populated {
	transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
}

.elementor-2904 .elementor-element.elementor-element-b7ca53f>.elementor-element-populated>.elementor-background-overlay {
	transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
}

.elementor-2904 .elementor-element.elementor-element-b7ca53f>.elementor-element-populated.elementor-column-wrap {
	padding: 0px 0px 0px 0px;
}

.elementor-2904 .elementor-element.elementor-element-b7ca53f>.elementor-element-populated.elementor-widget-wrap {
	padding: 0px 0px 0px 0px;
}

.elementor-2904 .elementor-element.elementor-element-346d190 {
	--spacer-size: 28px;
}

.elementor-2904 .elementor-element.elementor-element-55e1c1a>.elementor-widget-container {
	border-style: solid;
}

@media(max-width:1024px) and (min-width:768px) {
	.elementor-2904 .elementor-element.elementor-element-065aba8 {
		width: 40%;
	}

	.elementor-2904 .elementor-element.elementor-element-ccb1071 {
		width: 60%;
	}

	.elementor-2904 .elementor-element.elementor-element-3453daf {
		width: 100%;
	}

	.elementor-2904 .elementor-element.elementor-element-a508946 {
		width: 30%;
	}
}

@media(max-width:1024px) {
	.elementor-2904 .elementor-element.elementor-element-a8f8d09 {
		padding: 80px 0px 0px 0px;
	}

	.elementor-2904 .elementor-element.elementor-element-8c7cfe0 {
		--spacer-size: 30px;
	}

	.elementor-2904 .elementor-element.elementor-element-41b622d {
		--spacer-size: 30px;
	}

	.elementor-2904 .elementor-element.elementor-element-005ff96:not(.elementor-motion-effects-element-type-background),
	.elementor-2904 .elementor-element.elementor-element-005ff96>.elementor-motion-effects-container>.elementor-motion-effects-layer {
		background-position: center center;
	}

	.elementor-2904 .elementor-element.elementor-element-005ff96 {
		padding: 150px 30px 30px 30px;
	}

	.elementor-2904 .elementor-element.elementor-element-e47fc76 {
		padding: 80px 0px 80px 0px;
	}

	.elementor-2904 .elementor-element.elementor-element-6e6ccb7:not(.elementor-motion-effects-element-type-background),
	.elementor-2904 .elementor-element.elementor-element-6e6ccb7>.elementor-motion-effects-container>.elementor-motion-effects-layer {
		background-position: center left;
	}

	.elementor-2904 .elementor-element.elementor-element-6e6ccb7 {
		margin-top: 0px;
		margin-bottom: 0px;
		padding: 80px 0px 80px 0px;
	}

	.elementor-2904 .elementor-element.elementor-element-4ed8098 {
		--spacer-size: 30px;
	}

	.elementor-2904 .elementor-element.elementor-element-c050517 {
		--spacer-size: 30px;
	}

	.elementor-2904 .elementor-element.elementor-element-5d3e7e4 {
		padding: 80px 0px 80px 0px;
	}

	.elementor-2904 .elementor-element.elementor-element-605a2af {
		padding: 0px 0px 0px 0px;
	}

	.elementor-2904 .elementor-element.elementor-element-017fb78 {
		padding: 0px 0px 60px 0px;
	}

	.elementor-2904 .elementor-element.elementor-element-346d190 {
		--spacer-size: 30px;
	}
}

@media(max-width:767px) {
	.elementor-2904 .elementor-element.elementor-element-a8f8d09 {
		padding: 60px 0px 0px 0px;
	}

	.elementor-2904 .elementor-element.elementor-element-3ab6c6a {
		--spacer-size: 30px;
	}

	.elementor-2904 .elementor-element.elementor-element-01103d2>.elementor-widget-container {
		padding: 0px 0px 0px 0px;
	}

	.elementor-2904 .elementor-element.elementor-element-065aba8>.elementor-element-populated.elementor-column-wrap {
		padding: 0px 15px 0px 15px;
	}

	.elementor-2904 .elementor-element.elementor-element-065aba8>.elementor-element-populated.elementor-widget-wrap {
		padding: 0px 15px 0px 15px;
	}

	.elementor-2904 .elementor-element.elementor-element-ccb1071>.elementor-element-populated.elementor-column-wrap {
		padding: 0px 15px 0px 15px;
	}

	.elementor-2904 .elementor-element.elementor-element-ccb1071>.elementor-element-populated.elementor-widget-wrap {
		padding: 0px 15px 0px 15px;
	}

	.elementor-2904 .elementor-element.elementor-element-8c7cfe0 {
		--spacer-size: 40px;
	}

	.elementor-2904 .elementor-element.elementor-element-cd75fdf>.elementor-widget-container {
		padding: 0px 0px 0px 0px;
	}

	.elementor-2904 .elementor-element.elementor-element-41b622d {
		--spacer-size: 30px;
	}

	.elementor-2904 .elementor-element.elementor-element-005ff96:not(.elementor-motion-effects-element-type-background),
	.elementor-2904 .elementor-element.elementor-element-005ff96>.elementor-motion-effects-container>.elementor-motion-effects-layer {
		background-position: center center;
	}

	.elementor-2904 .elementor-element.elementor-element-005ff96 {
		padding: 250px 30px 30px 30px;
	}

	.elementor-2904 .elementor-element.elementor-element-cc53cc7>.elementor-element-populated.elementor-column-wrap {
		padding: 0px 0px 0px 0px;
	}

	.elementor-2904 .elementor-element.elementor-element-cc53cc7>.elementor-element-populated.elementor-widget-wrap {
		padding: 0px 0px 0px 0px;
	}

	.elementor-2904 .elementor-element.elementor-element-e47fc76 {
		padding: 60px 0px 60px 0px;
	}

	.elementor-2904 .elementor-element.elementor-element-6e6ccb7 {
		padding: 60px 0px 60px 0px;
	}

	.elementor-2904 .elementor-element.elementor-element-3453daf>.elementor-element-populated {
		margin: 0px 0px 0px 0px;
		--e-column-margin-right: 0px;
		--e-column-margin-left: 0px;
	}

	.elementor-2904 .elementor-element.elementor-element-5d3e7e4 {
		padding: 60px 0px 60px 0px;
	}

	.elementor-2904 .elementor-element.elementor-element-38bb30c {
		--spacer-size: 25px;
	}

	.elementor-2904 .elementor-element.elementor-element-605a2af {
		padding: 0px 0px 0px 0px;
	}

	.elementor-2904 .elementor-element.elementor-element-017fb78 {
		padding: 0px 0px 60px 0px;
	}
}

.recentcomments a {
	display: inline !important;
	padding: 0 !important;
	margin: 0 !important;
}

.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
	background-image: none !important;
}

@media screen and (max-height: 1024px) {

	.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
	.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
		background-image: none !important;
	}
}

@media screen and (max-height: 640px) {

	.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
	.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
		background-image: none !important;
	}
}

@font-face {
	font-family: Inter;
	font-style: normal;
	font-weight: 300 900;
	font-display: fallback;
	src: url('https://rumble.ancorathemes.com/wp-content/plugins/woocommerce/assets/fonts/Inter-VariableFont_slnt,wght.woff2') format('woff2');
	font-stretch: normal;
}

@font-face {
	font-family: Cardo;
	font-style: normal;
	font-weight: 400;
	font-display: fallback;
	src: url('https://rumble.ancorathemes.com/wp-content/plugins/woocommerce/assets/fonts/cardo_normal_400.woff2') format('woff2');
}

.trx_addons_inline_1244980015 img {
	max-height: 80px;
}

.trx_addons_inline_28691430 img {
	max-height: 80px;
}

.trx_addons_inline_1177190236 {
	width: 24% !important;
}

.rumble_inline_1880539680 {
	background-image: url(https://rumble.ancorathemes.com/wp-content/uploads/2020/10/shutterstock_1767719231-copyright-765x430.jpg);
}

.trx_addons_inline_649601282 {
	width: calc(100% - 24%) !important;
}

.trx_addons_inline_1012907892 {
	width: 24% !important;
}

.rumble_inline_1561366690 {
	background-image: url(https://rumble.ancorathemes.com/wp-content/uploads/2020/10/shutterstock_1748469800-copyright-765x510.jpg);
}

.trx_addons_inline_21111603 {
	width: calc(100% - 24%) !important;
}

.trx_addons_inline_317497322 {
	width: 24% !important;
}

.rumble_inline_34298269 {
	background-image: url(https://rumble.ancorathemes.com/wp-content/uploads/2020/10/shutterstock_570888670-copyright-765x509.jpg);
}

.trx_addons_inline_125202356 {
	width: calc(100% - 24%) !important;
}

.rumble_inline_381066861 {
	background-image: url(https://rumble.ancorathemes.com/wp-content/uploads/2021/12/event-3-copyright-765x1054.jpg);
}

.rumble_inline_553606134 {
	background-image: url(https://rumble.ancorathemes.com/wp-content/uploads/2021/12/event-2-copyright-765x1054.jpg);
}

.rumble_inline_1430965652 {
	background-image: url(https://rumble.ancorathemes.com/wp-content/uploads/2021/12/event-1-copyright-765x1054.jpg);
}

.trx_addons_inline_200934247 img {
	max-height: 80px;
}

</style>

<style>

.elementor-element.elementor-element-7fd3be9 {
	transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
	padding: 0% 2.3% 0% 2.3%;
}

.elementor-element.elementor-element-7fd3be9>.elementor-background-overlay {
	transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
}

.elementor-element.elementor-element-e22dc5d {
	-ms-flex-pack: inherit;
	-webkit-justify-content: inherit;
	justify-content: inherit;
}

.elementor-element.elementor-element-865cf23 {
	padding: 40px 0px 30px 0px;
}

.elementor-bc-flex-widget .elementor-element.elementor-element-8c1d07d.elementor-column .elementor-widget-wrap {
	align-items: center;
}

.elementor-element.elementor-element-8c1d07d.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
	align-content: center;
	align-items: center;
}

.elementor-element.elementor-element-8c1d07d {
	-ms-flex-pack: inherit;
	-webkit-justify-content: inherit;
	justify-content: inherit;
}

.elementor-element.elementor-element-8c1d07d>.elementor-element-populated {
	margin: 5px 0px 0px 0px;
	--e-column-margin-right: 0px;
	--e-column-margin-left: 0px;
}

.elementor-element.elementor-element-41022c9 .logo_image {
	max-height: 80px;
}

.elementor-element.elementor-element-41022c9>.elementor-widget-container {
	padding: 0px 25px 0px 0px;
}

.elementor-element.elementor-element-f1e7607>.elementor-widget-container {
	padding: 0px 0px 7px 0px;
}

.elementor-bc-flex-widget .elementor-element.elementor-element-3e63211.elementor-column .elementor-widget-wrap {
	align-items: center;
}

.elementor-element.elementor-element-3e63211.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
	align-content: center;
	align-items: center;
}

.elementor-element.elementor-element-3e63211 {
	-ms-flex-pack: center;
	-webkit-justify-content: center;
	justify-content: center;
}

.elementor-element.elementor-element-aa7a70c>.elementor-widget-container {
	margin: -3px 0px 0px 0px;
}

.elementor-element.elementor-element-d7af7bd:not(.elementor-motion-effects-element-type-background),
.elementor-element.elementor-element-d7af7bd>.elementor-motion-effects-container>.elementor-motion-effects-layer {
	background-color: #16120f;
}

.elementor-element.elementor-element-d7af7bd {
	transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
	padding: 15px 0px 15px 0px;
}

.elementor-element.elementor-element-d7af7bd>.elementor-background-overlay {
	transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
}

.elementor-bc-flex-widget .elementor-element.elementor-element-097d089.elementor-column .elementor-widget-wrap {
	align-items: center;
}

.elementor-element.elementor-element-097d089.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
	align-content: center;
	align-items: center;
}

.elementor-element.elementor-element-097d089 {
	-ms-flex-pack: inherit;
	-webkit-justify-content: inherit;
	justify-content: inherit;
}

.elementor-element.elementor-element-bf6af0c .logo_image {
	max-height: 80px;
}

.elementor-bc-flex-widget .elementor-element.elementor-element-7daa559.elementor-column .elementor-widget-wrap {
	align-items: center;
}

.elementor-element.elementor-element-7daa559.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
	align-content: center;
	align-items: center;
}

.elementor-element.elementor-element-7daa559 {
	-ms-flex-pack: inherit;
	-webkit-justify-content: inherit;
	justify-content: inherit;
}

@media(max-width:767px) {
	.elementor-element.elementor-element-097d089 {
		width: 50%;
	}

	.elementor-element.elementor-element-7daa559 {
		width: 50%;
	}
}

@media(min-width:768px) {
	.elementor-element.elementor-element-8c1d07d {
		width: 81.988%;
	}

	.elementor-element.elementor-element-3e63211 {
		width: 18.012%;
	}
}

@media(max-width:1024px) and (min-width:768px) {
	.elementor-element.elementor-element-8c1d07d {
		width: 100%;
	}
}

.elementor-4977 .elementor-element.elementor-element-c107336:not(.elementor-motion-effects-element-type-background),
.elementor-4977 .elementor-element.elementor-element-c107336>.elementor-motion-effects-container>.elementor-motion-effects-layer {
	background-color: #16120f;
	background-image: url("https://rumble.ancorathemes.com/wp-content/uploads/2018/05/footer-bg.jpg");
	background-position: center center;
	background-repeat: repeat-y;
	background-size: cover;
}

.elementor-4977 .elementor-element.elementor-element-c107336 {
	transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
	padding: 142px 0px 36px 0px;
}

.elementor-4977 .elementor-element.elementor-element-c107336>.elementor-background-overlay {
	transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
}

.elementor-4977 .elementor-element.elementor-element-5fa678f {
	-ms-flex-pack: inherit;
	-webkit-justify-content: inherit;
	justify-content: inherit;
}

.elementor-4977 .elementor-element.elementor-element-185a630>.elementor-widget-container {
	margin: 0px 0px 0px 0px;
}

.elementor-4977 .elementor-element.elementor-element-ced4151 {
	--spacer-size: 18px;
}

.elementor-4977 .elementor-element.elementor-element-2d2b316 {
	--spacer-size: 20px;
}

.elementor-4977 .elementor-element.elementor-element-06b3372:not(.elementor-motion-effects-element-type-background),
.elementor-4977 .elementor-element.elementor-element-06b3372>.elementor-motion-effects-container>.elementor-motion-effects-layer {
	background-image: url("https://rumble.ancorathemes.com/wp-content/uploads/2019/02/shop-bg.jpg");
	background-position: center center;
	background-repeat: no-repeat;
	background-size: cover;
}

.elementor-4977 .elementor-element.elementor-element-06b3372 {
	transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
	padding: 116px 0px 51px 0px;
}

.elementor-4977 .elementor-element.elementor-element-06b3372>.elementor-background-overlay {
	transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
}

.elementor-4977 .elementor-element.elementor-element-06b3372>.elementor-container {
	text-align: center;
}

.elementor-4977 .elementor-element.elementor-element-e20019a {
	-ms-flex-pack: inherit;
	-webkit-justify-content: inherit;
	justify-content: inherit;
}

.elementor-4977 .elementor-element.elementor-element-e20019a>.elementor-element-populated {
	text-align: center;
}

.elementor-4977 .elementor-element.elementor-element-7dd0013 .logo_image {
	max-height: 80px;
}

.elementor-4977 .elementor-element.elementor-element-7dbd35c {
	--spacer-size: 8px;
}

.elementor-4977 .elementor-element.elementor-element-1adaa42 {
	--spacer-size: 80px;
}

@media(max-width:1024px) {
	.elementor-4977 .elementor-element.elementor-element-c107336 {
		padding: 80px 0px 10px 0px;
	}

	.elementor-4977 .elementor-element.elementor-element-06b3372 {
		padding: 80px 0px 50px 0px;
	}

	.elementor-4977 .elementor-element.elementor-element-1adaa42 {
		--spacer-size: 40px;
	}
}

@media(max-width:767px) {
	.elementor-4977 .elementor-element.elementor-element-c107336 {
		padding: 60px 0px 60px 0px;
	}

	.elementor-4977 .elementor-element.elementor-element-ced4151 {
		--spacer-size: 20px;
	}

	.elementor-4977 .elementor-element.elementor-element-06b3372 {
		padding: 60px 0px 40px 0px;
	}

	.elementor-4977 .elementor-element.elementor-element-1adaa42 {
		--spacer-size: 35px;
	}
}

.trx_socials_inline_160241782 {
	margin-right: -15px
}

.trx_socials_inline_1774374882 {
	width: 20%;
	padding: 0 15px 15px 0;
}

.trx_socials_inline_1513281858 {
	width: 20%;
	padding: 0 15px 15px 0;
}

.trx_socials_inline_889062500 {
	width: 20%;
	padding: 0 15px 15px 0;
}

.trx_socials_inline_282120927 {
	width: 20%;
	padding: 0 15px 15px 0;
}

.trx_socials_inline_1951770475 {
	width: 20%;
	padding: 0 15px 15px 0;
}

.trx_demo_inline_1586609389 {
	color: #ffffff !important;
	border-color: #ffaa5f !important;
	background-color: #ffaa5f !important;
}

.trx_demo_inline_675096753:hover {
	color: #ffffff !important;
	border-color: #cc884c !important;
	background-color: #cc884c !important;
}

.elementor-3081 .elementor-element.elementor-element-b13ae74 {
	margin-top: 0px;
	margin-bottom: 0px;
	padding: 0px 0px 0px 0px;
}

.elementor-3081 .elementor-element.elementor-element-e59d1e2>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
	margin-bottom: 0px;
}

.elementor-3081 .elementor-element.elementor-element-e59d1e2 {
	-ms-flex-pack: inherit;
	-webkit-justify-content: inherit;
	justify-content: inherit;
}

.elementor-3081 .elementor-element.elementor-element-e59d1e2>.elementor-element-populated {
	margin: 0px 0px 0px 0px;
	--e-column-margin-right: 0px;
	--e-column-margin-left: 0px;
}

.elementor-3081 .elementor-element.elementor-element-e59d1e2>.elementor-element-populated.elementor-column-wrap {
	padding: 0px 0px 0px 0px;
}

.elementor-3081 .elementor-element.elementor-element-e59d1e2>.elementor-element-populated.elementor-widget-wrap {
	padding: 0px 0px 0px 0px;
}

.elementor-kit-3991 {
	--e-global-color-primary: #6EC1E4;
	--e-global-color-secondary: #54595F;
	--e-global-color-text: #7A7A7A;
	--e-global-color-accent: #61CE70;
	--e-global-typography-primary-font-family: "Roboto";
	--e-global-typography-primary-font-weight: 600;
	--e-global-typography-secondary-font-family: "Roboto Slab";
	--e-global-typography-secondary-font-weight: 400;
	--e-global-typography-text-font-family: "Roboto";
	--e-global-typography-text-font-weight: 400;
	--e-global-typography-accent-font-family: "Roboto";
	--e-global-typography-accent-font-weight: 500;
}

.elementor-section.elementor-section-boxed>.elementor-container {
	max-width: 1308px;
}

.e-con {
	--container-max-width: 1308px;
}

.elementor-widget:not(:last-child) {
	margin-block-end: 20px;
}

.elementor-element {
	--widgets-spacing: 20px 20px;
}

	{}

h1.entry-title {
	display: var(--page-title-display);
}

@media(max-width: 1024px) {
	.elementor-section.elementor-section-boxed>.elementor-container {
		max-width: 1024px;
	}

	.e-con {
		--container-max-width: 1024px;
	}
}

@media(max-width: 767px) {
	.elementor-section.elementor-section-boxed>.elementor-container {
		max-width: 767px;
	}

	.e-con {
		--container-max-width: 767px;
	}
}

.elementor-element.elementor-element-495821e:not(.elementor-motion-effects-element-type-background),
.elementor-element.elementor-element-495821e>.elementor-motion-effects-container>.elementor-motion-effects-layer {
	background-image: url("https://rumble.ancorathemes.com/wp-content/uploads/2019/02/gym-home-1-copyright.jpg");
	background-position: center center;
	background-repeat: no-repeat;
	background-size: cover;
}

.elementor-element.elementor-element-495821e {
	transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
	padding: 15% 0% 15% 12.7%;
}

.elementor-element.elementor-element-495821e>.elementor-background-overlay {
	transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
}

.elementor-element.elementor-element-c1568d6 {
	-ms-flex-pack: inherit;
	-webkit-justify-content: inherit;
	justify-content: inherit;
}

.elementor-element.elementor-element-fdcbd24 {
	--spacer-size: 60px;
}

.elementor-element.elementor-element-f9f96d5 {
	padding: 28px 0px 0px 0px;
}

.elementor-element.elementor-element-3fb01c7 {
	-ms-flex-pack: inherit;
	-webkit-justify-content: inherit;
	justify-content: inherit;
}

.elementor-element.elementor-element-e489cd7 {
	padding: 100px 0px 130px 0px;
}

.elementor-element.elementor-element-c1a0622 {
	-ms-flex-pack: inherit;
	-webkit-justify-content: inherit;
	justify-content: inherit;
}

.elementor-element.elementor-element-2aa2d53:not(.elementor-motion-effects-element-type-background),
.elementor-element.elementor-element-2aa2d53>.elementor-motion-effects-container>.elementor-motion-effects-layer {
	background-color: #e9e5d8;
}

.elementor-element.elementor-element-2aa2d53 {
	transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
	padding: 140px 0px 130px 0px;
}

.elementor-element.elementor-element-2aa2d53>.elementor-background-overlay {
	transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
}

.elementor-element.elementor-element-cef49bc {
	-ms-flex-pack: inherit;
	-webkit-justify-content: inherit;
	justify-content: inherit;
}

.elementor-element.elementor-element-9af805b {
	--spacer-size: 26px;
}

.elementor-element.elementor-element-f14459c {
	--spacer-size: 40px;
}

.elementor-element.elementor-element-11ad3a9 {
	padding: 130px 0px 130px 0px;
}

.elementor-element.elementor-element-d7bf6d7 {
	-ms-flex-pack: inherit;
	-webkit-justify-content: inherit;
	justify-content: inherit;
}

.elementor-element.elementor-element-d12476a {
	--spacer-size: 8px;
}

.elementor-element.elementor-element-be143ce:not(.elementor-motion-effects-element-type-background),
.elementor-element.elementor-element-be143ce>.elementor-motion-effects-container>.elementor-motion-effects-layer {
	background-color: #16120f;
}

.elementor-element.elementor-element-be143ce {
	transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
	padding: 138px 0px 125px 0px;
}

.elementor-element.elementor-element-be143ce>.elementor-background-overlay {
	transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
}

.elementor-element.elementor-element-bd6d2cd {
	-ms-flex-pack: inherit;
	-webkit-justify-content: inherit;
	justify-content: inherit;
}

.elementor-element.elementor-element-47ae302 {
	--spacer-size: 35px;
}

.elementor-element.elementor-element-c7e0655>.elementor-widget-container {
	padding: 30px 0px 0px 0px;
}

.elementor-element.elementor-element-833f08b {
	padding: 130px 0px 128px 0px;
}

.elementor-element.elementor-element-e7448c8 {
	-ms-flex-pack: inherit;
	-webkit-justify-content: inherit;
	justify-content: inherit;
}

.elementor-element.elementor-element-591bb09 {
	--spacer-size: 35px;
}

.elementor-element.elementor-element-ccc5703 {
	--spacer-size: 15px;
}

.elementor-element.elementor-element-44a8dd52:not(.elementor-motion-effects-element-type-background),
.elementor-element.elementor-element-44a8dd52>.elementor-motion-effects-container>.elementor-motion-effects-layer {
	background-image: url("https://rumble.ancorathemes.com/wp-content/uploads/2018/05/bg_nstagram.jpg");
	background-position: center center;
	background-repeat: repeat;
	background-size: cover;
}

.elementor-element.elementor-element-44a8dd52 {
	transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
	padding: 133px 0px 120px 0px;
}

.elementor-element.elementor-element-44a8dd52>.elementor-background-overlay {
	transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
}

.elementor-element.elementor-element-6743932d {
	-ms-flex-pack: inherit;
	-webkit-justify-content: inherit;
	justify-content: inherit;
	z-index: 5;
}

.elementor-element.elementor-element-7fa93ef {
	-ms-flex-pack: inherit;
	-webkit-justify-content: inherit;
	justify-content: inherit;
}

.elementor-element.elementor-element-28d0eae8 {
	-ms-flex-pack: inherit;
	-webkit-justify-content: inherit;
	justify-content: inherit;
}

.elementor-element.elementor-element-28d0eae8>.elementor-element-populated.elementor-column-wrap {
	padding: 0px 0px 0px 0px;
}

.elementor-element.elementor-element-28d0eae8>.elementor-element-populated.elementor-widget-wrap {
	padding: 0px 0px 0px 0px;
}

.elementor-element.elementor-element-59c27816 {
	--spacer-size: 30px;
}

.elementor-element.elementor-element-38a9e021 {
	-ms-flex-pack: inherit;
	-webkit-justify-content: inherit;
	justify-content: inherit;
}

@media(max-width: 1024px) and (min-width:768px) {
	.elementor-element.elementor-element-7fa93ef {
		width: 15%;
	}

	.elementor-element.elementor-element-28d0eae8 {
		width: 70%;
	}

	.elementor-element.elementor-element-38a9e021 {
		width: 15%;
	}
}

@media(max-width: 1024px) {
	.elementor-element.elementor-element-fdcbd24 {
		--spacer-size: 30px;
	}

	.elementor-element.elementor-element-e489cd7 {
		padding: 50px 0px 80px 0px;
	}

	.elementor-element.elementor-element-2aa2d53 {
		padding: 80px 0px 80px 0px;
	}

	.elementor-element.elementor-element-11ad3a9 {
		padding: 80px 0px 80px 0px;
	}

	.elementor-element.elementor-element-be143ce {
		padding: 80px 0px 80px 0px;
	}

	.elementor-element.elementor-element-833f08b {
		padding: 80px 0px 80px 0px;
	}

	.elementor-element.elementor-element-44a8dd52 {
		padding: 80px 0px 80px 0px;
	}
}

@media(max-width: 767px) {
	.elementor-element.elementor-element-495821e {
		padding: 30% 0% 25% 0%;
	}

	.elementor-element.elementor-element-fdcbd24 {
		--spacer-size: 10px;
	}

	.elementor-element.elementor-element-e489cd7 {
		padding: 30px 0px 30px 0px;
	}

	.elementor-element.elementor-element-2aa2d53 {
		padding: 60px 0px 60px 0px;
	}

	.elementor-element.elementor-element-9af805b {
		--spacer-size: 5px;
	}

	.elementor-element.elementor-element-f14459c {
		--spacer-size: 5px;
	}

	.elementor-element.elementor-element-11ad3a9 {
		padding: 60px 0px 60px 0px;
	}

	.elementor-element.elementor-element-d12476a {
		--spacer-size: 25px;
	}

	.elementor-element.elementor-element-be143ce {
		padding: 60px 0px 60px 0px;
	}

	.elementor-element.elementor-element-47ae302 {
		--spacer-size: 25px;
	}

	.elementor-element.elementor-element-833f08b {
		padding: 60px 0px 60px 0px;
	}

	.elementor-element.elementor-element-591bb09 {
		--spacer-size: 25px;
	}

	.elementor-element.elementor-element-44a8dd52 {
		padding: 60px 0px 60px 0px;
	}
}

</style>

<style type="text/css" id="trx_addons-inline-styles-inline-css">.trx_addons_inline_430258709 img{
    max-height:80px;
}
.trx_addons_inline_1847258572 img{
    max-height:80px;
}
.trx_addons_inline_1624856218 img{
    max-height:80px;
}
</style> <style id="elementor-post-809">.elementor-element.elementor-element-a9fd441:not(.elementor-motion-effects-element-type-background), .elementor-element.elementor-element-a9fd441 > .elementor-motion-effects-container > .elementor-motion-effects-layer{
    background-image:url("https://rumble.ancorathemes.com/wp-content/uploads/2019/01/breadcrumbs-bg-copyright.jpg");
    background-position:center center;
    background-repeat:no-repeat;
    background-size:cover;
}
.elementor-element.elementor-element-a9fd441{
    transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    padding: 0 !important;
}
.elementor-element.elementor-element-a9fd441 > .elementor-background-overlay{
    transition:background 0.3s, border-radius 0.3s, opacity 0.3s;
}
.elementor-element.elementor-element-3cad354f{
    -ms-flex-pack:inherit;
    -webkit-justify-content:inherit;
    justify-content:inherit;
}
.elementor-element.elementor-element-21d2772b{
    padding:40px 0px 30px 0px;
}
.elementor-bc-flex-widget .elementor-element.elementor-element-3d12a0d4.elementor-column .elementor-widget-wrap{
    align-items:center;
}
.elementor-element.elementor-element-3d12a0d4.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{
    align-content:center;
    align-items:center;
}
.elementor-element.elementor-element-3d12a0d4{
    -ms-flex-pack:inherit;
    -webkit-justify-content:inherit;
    justify-content:inherit;
}
.elementor-element.elementor-element-3d12a0d4 > .elementor-element-populated{
    margin:5px 0px 0px 0px;
    --e-column-margin-right:0px;
    --e-column-margin-left:0px;
}
.elementor-element.elementor-element-210b2834 .logo_image{
    max-height:80px;
}
.elementor-element.elementor-element-210b2834 > .elementor-widget-container{
    padding:0px 25px 0px 0px;
}
.elementor-element.elementor-element-7cac2825 > .elementor-widget-container{
    padding:0px 0px 7px 0px;
}
.elementor-bc-flex-widget .elementor-element.elementor-element-5d21bd83.elementor-column .elementor-widget-wrap{
    align-items:center;
}
.elementor-element.elementor-element-5d21bd83.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{
    align-content:center;
    align-items:center;
}
.elementor-element.elementor-element-5d21bd83{
    -ms-flex-pack:center;
    -webkit-justify-content:center;
    justify-content:center;
}
.elementor-element.elementor-element-4eee7723 > .elementor-widget-container{
    margin:-3px 0px 0px 0px;
}
.elementor-element.elementor-element-12563871{
    padding:80px 0px 138px 0px;
}
.elementor-element.elementor-element-2b3b8d87{
    -ms-flex-pack:inherit;
    -webkit-justify-content:inherit;
    justify-content:inherit;
}
.elementor-element.elementor-element-351ff150 .sc_layouts_title{
    min-height:0px;
}
.elementor-element.elementor-element-15604c58:not(.elementor-motion-effects-element-type-background), .elementor-element.elementor-element-15604c58 > .elementor-motion-effects-container > .elementor-motion-effects-layer{
    background-color:#16120f;
}
.elementor-element.elementor-element-15604c58{
    transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    padding:15px 0px 15px 0px;
}
.elementor-element.elementor-element-15604c58 > .elementor-background-overlay{
    transition:background 0.3s, border-radius 0.3s, opacity 0.3s;
}
.elementor-bc-flex-widget .elementor-element.elementor-element-552f6340.elementor-column .elementor-widget-wrap{
    align-items:center;
}
.elementor-element.elementor-element-552f6340.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{
    align-content:center;
    align-items:center;
}
.elementor-element.elementor-element-552f6340{
    -ms-flex-pack:inherit;
    -webkit-justify-content:inherit;
    justify-content:inherit;
}
.elementor-element.elementor-element-1b77f691 .logo_image{
    max-height:80px;
}
.elementor-bc-flex-widget .elementor-element.elementor-element-433277b7.elementor-column .elementor-widget-wrap{
    align-items:center;
}
.elementor-element.elementor-element-433277b7.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{
    align-content:center;
    align-items:center;
}
.elementor-element.elementor-element-433277b7{
    -ms-flex-pack:inherit;
    -webkit-justify-content:inherit;
    justify-content:inherit;
}
.elementor-element.elementor-element-2374972:not(.elementor-motion-effects-element-type-background), .elementor-element.elementor-element-2374972 > .elementor-motion-effects-container > .elementor-motion-effects-layer{
    background-image:url("https://rumble.ancorathemes.com/wp-content/uploads/2019/01/breadcrumbs-bg-copyright.jpg");
}
.elementor-element.elementor-element-2374972{
    transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
}
.elementor-element.elementor-element-2374972 > .elementor-background-overlay{
    transition:background 0.3s, border-radius 0.3s, opacity 0.3s;
}
.elementor-element.elementor-element-3bce911{
    -ms-flex-pack:inherit;
    -webkit-justify-content:inherit;
    justify-content:inherit;
}
.elementor-element.elementor-element-d772f2e{
    padding:80px 0px 138px 0px;
}
.elementor-element.elementor-element-07b80d7{
    -ms-flex-pack:inherit;
    -webkit-justify-content:inherit;
    justify-content:inherit;
}
.elementor-element.elementor-element-3a12b9d .sc_layouts_title{
    min-height:0px;
}
@media(min-width:768px){
    .elementor-element.elementor-element-3d12a0d4{
        width:81.988%;
    }
    .elementor-element.elementor-element-5d21bd83{
        width:18.012%;
    }
}
@media(max-width:1024px) and (min-width:768px){
    .elementor-element.elementor-element-3d12a0d4{
        width:100%;
    }
}
@media(max-width:1024px){
    .elementor-element.elementor-element-12563871{
        padding:30px 0px 50px 0px;
    }
    .elementor-element.elementor-element-d772f2e{
        padding:30px 0px 50px 0px;
    }
}
@media(max-width:767px){
    .elementor-element.elementor-element-12563871{
        padding:20px 0px 40px 0px;
    }
    .elementor-element.elementor-element-552f6340{
        width:50%;
    }
    .elementor-element.elementor-element-433277b7{
        width:50%;
    }
    .elementor-element.elementor-element-d772f2e{
        padding:20px 0px 40px 0px;
    }
}
</style> <style>.elementor-element.elementor-element-a9fd441:not(.elementor-motion-effects-element-type-background), .elementor-element.elementor-element-a9fd441 > .elementor-motion-effects-container > .elementor-motion-effects-layer{
    background-image:url("https://rumble.ancorathemes.com/wp-content/uploads/2019/01/breadcrumbs-bg-copyright.jpg");
    background-position:center center;
    background-repeat:no-repeat;
    background-size:cover;
}
.elementor-element.elementor-element-a9fd441{
    transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    padding:0% 2.3% 0% 2.3%;
}
.elementor-element.elementor-element-a9fd441 > .elementor-background-overlay{
    transition:background 0.3s, border-radius 0.3s, opacity 0.3s;
}
.elementor-element.elementor-element-3cad354f{
    -ms-flex-pack:inherit;
    -webkit-justify-content:inherit;
    justify-content:inherit;
}
.elementor-element.elementor-element-21d2772b{
    padding:40px 0px 30px 0px;
}
.elementor-bc-flex-widget .elementor-element.elementor-element-3d12a0d4.elementor-column .elementor-widget-wrap{
    align-items:center;
}
.elementor-element.elementor-element-3d12a0d4.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{
    align-content:center;
    align-items:center;
}
.elementor-element.elementor-element-3d12a0d4{
    -ms-flex-pack:inherit;
    -webkit-justify-content:inherit;
    justify-content:inherit;
}
.elementor-element.elementor-element-3d12a0d4 > .elementor-element-populated{
    margin:5px 0px 0px 0px;
    --e-column-margin-right:0px;
    --e-column-margin-left:0px;
}
.elementor-element.elementor-element-210b2834 .logo_image{
    max-height:80px;
}
.elementor-element.elementor-element-210b2834 > .elementor-widget-container{
    padding:0px 25px 0px 0px;
}
.elementor-element.elementor-element-7cac2825 > .elementor-widget-container{
    padding:0px 0px 7px 0px;
}
.elementor-bc-flex-widget .elementor-element.elementor-element-5d21bd83.elementor-column .elementor-widget-wrap{
    align-items:center;
}
.elementor-element.elementor-element-5d21bd83.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{
    align-content:center;
    align-items:center;
}
.elementor-element.elementor-element-5d21bd83{
    -ms-flex-pack:center;
    -webkit-justify-content:center;
    justify-content:center;
}
.elementor-element.elementor-element-4eee7723 > .elementor-widget-container{
    margin:-3px 0px 0px 0px;
}
.elementor-element.elementor-element-12563871{
    padding:80px 0px 138px 0px;
}
.elementor-element.elementor-element-2b3b8d87{
    -ms-flex-pack:inherit;
    -webkit-justify-content:inherit;
    justify-content:inherit;
}
.elementor-element.elementor-element-351ff150 .sc_layouts_title{
    min-height:0px;
}
.elementor-element.elementor-element-15604c58:not(.elementor-motion-effects-element-type-background), .elementor-element.elementor-element-15604c58 > .elementor-motion-effects-container > .elementor-motion-effects-layer{
    background-color:#16120f;
}
.elementor-element.elementor-element-15604c58{
    transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    padding:15px 0px 15px 0px;
}
.elementor-element.elementor-element-15604c58 > .elementor-background-overlay{
    transition:background 0.3s, border-radius 0.3s, opacity 0.3s;
}
.elementor-bc-flex-widget .elementor-element.elementor-element-552f6340.elementor-column .elementor-widget-wrap{
    align-items:center;
}
.elementor-element.elementor-element-552f6340.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{
    align-content:center;
    align-items:center;
}
.elementor-element.elementor-element-552f6340{
    -ms-flex-pack:inherit;
    -webkit-justify-content:inherit;
    justify-content:inherit;
}
.elementor-element.elementor-element-1b77f691 .logo_image{
    max-height:80px;
}
.elementor-bc-flex-widget .elementor-element.elementor-element-433277b7.elementor-column .elementor-widget-wrap{
    align-items:center;
}
.elementor-element.elementor-element-433277b7.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{
    align-content:center;
    align-items:center;
}
.elementor-element.elementor-element-433277b7{
    -ms-flex-pack:inherit;
    -webkit-justify-content:inherit;
    justify-content:inherit;
}
.elementor-element.elementor-element-2374972:not(.elementor-motion-effects-element-type-background), .elementor-element.elementor-element-2374972 > .elementor-motion-effects-container > .elementor-motion-effects-layer{
    background-image:url("https://rumble.ancorathemes.com/wp-content/uploads/2019/01/breadcrumbs-bg-copyright.jpg");
}
.elementor-element.elementor-element-2374972{
    transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
}
.elementor-element.elementor-element-2374972 > .elementor-background-overlay{
    transition:background 0.3s, border-radius 0.3s, opacity 0.3s;
}
.elementor-element.elementor-element-3bce911{
    -ms-flex-pack:inherit;
    -webkit-justify-content:inherit;
    justify-content:inherit;
}
.elementor-element.elementor-element-d772f2e{
    padding:80px 0px 138px 0px;
}
.elementor-element.elementor-element-07b80d7{
    -ms-flex-pack:inherit;
    -webkit-justify-content:inherit;
    justify-content:inherit;
}
.elementor-element.elementor-element-3a12b9d .sc_layouts_title{
    min-height:0px;
}
@media(min-width:768px){
    .elementor-element.elementor-element-3d12a0d4{
        width:81.988%;
    }
    .elementor-element.elementor-element-5d21bd83{
        width:18.012%;
    }
}
@media(max-width:1024px) and (min-width:768px){
    .elementor-element.elementor-element-3d12a0d4{
        width:100%;
    }
}
@media(max-width:1024px){
    .elementor-element.elementor-element-12563871{
        padding:30px 0px 50px 0px;
    }
    .elementor-element.elementor-element-d772f2e{
        padding:30px 0px 50px 0px;
    }
}
@media(max-width:767px){
    .elementor-element.elementor-element-12563871{
        padding:20px 0px 40px 0px;
    }
    .elementor-element.elementor-element-552f6340{
        width:50%;
    }
    .elementor-element.elementor-element-433277b7{
        width:50%;
    }
    .elementor-element.elementor-element-d772f2e{
        padding:20px 0px 40px 0px;
    }
}
</style> <style id="elementor-post-656">.elementor-656 .elementor-element.elementor-element-c4ee1d0:not(.elementor-motion-effects-element-type-background), .elementor-656 .elementor-element.elementor-element-c4ee1d0 > .elementor-motion-effects-container > .elementor-motion-effects-layer{
    background-image:url("https://rumble.ancorathemes.com/wp-content/uploads/2019/02/shop-bg.jpg");
    background-position:center center;
    background-repeat:no-repeat;
    background-size:cover;
}
.elementor-656 .elementor-element.elementor-element-c4ee1d0{
    transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    padding:116px 0px 51px 0px;
}
.elementor-656 .elementor-element.elementor-element-c4ee1d0 > .elementor-background-overlay{
    transition:background 0.3s, border-radius 0.3s, opacity 0.3s;
}
.elementor-656 .elementor-element.elementor-element-c4ee1d0 > .elementor-container{
    text-align:center;
}
.elementor-656 .elementor-element.elementor-element-ea4c1fe{
    -ms-flex-pack:inherit;
    -webkit-justify-content:inherit;
    justify-content:inherit;
}
.elementor-656 .elementor-element.elementor-element-ea4c1fe > .elementor-element-populated{
    text-align:center;
}
.elementor-656 .elementor-element.elementor-element-b365206 .logo_image{
    max-height:80px;
}
.elementor-656 .elementor-element.elementor-element-d54a328{
    --spacer-size:8px;
}
.elementor-656 .elementor-element.elementor-element-eb8197d{
    --spacer-size:80px;
}
@media(max-width:1024px){
    .elementor-656 .elementor-element.elementor-element-c4ee1d0{
        padding:80px 0px 50px 0px;
    }
    .elementor-656 .elementor-element.elementor-element-eb8197d{
        --spacer-size:40px;
    }
}
@media(max-width:767px){
    .elementor-656 .elementor-element.elementor-element-c4ee1d0{
        padding:60px 0px 40px 0px;
    }
    .elementor-656 .elementor-element.elementor-element-eb8197d{
        --spacer-size:35px;
    }
}
</style> <style>.elementor-656 .elementor-element.elementor-element-c4ee1d0:not(.elementor-motion-effects-element-type-background), .elementor-656 .elementor-element.elementor-element-c4ee1d0 > .elementor-motion-effects-container > .elementor-motion-effects-layer{
    background-image:url("https://rumble.ancorathemes.com/wp-content/uploads/2019/02/shop-bg.jpg");
    background-position:center center;
    background-repeat:no-repeat;
    background-size:cover;
}
.elementor-656 .elementor-element.elementor-element-c4ee1d0{
    transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    padding:116px 0px 51px 0px;
}
.elementor-656 .elementor-element.elementor-element-c4ee1d0 > .elementor-background-overlay{
    transition:background 0.3s, border-radius 0.3s, opacity 0.3s;
}
.elementor-656 .elementor-element.elementor-element-c4ee1d0 > .elementor-container{
    text-align:center;
}
.elementor-656 .elementor-element.elementor-element-ea4c1fe{
    -ms-flex-pack:inherit;
    -webkit-justify-content:inherit;
    justify-content:inherit;
}
.elementor-656 .elementor-element.elementor-element-ea4c1fe > .elementor-element-populated{
    text-align:center;
}
.elementor-656 .elementor-element.elementor-element-b365206 .logo_image{
    max-height:80px;
}
.elementor-656 .elementor-element.elementor-element-d54a328{
    --spacer-size:8px;
}
.elementor-656 .elementor-element.elementor-element-eb8197d{
    --spacer-size:80px;
}
@media(max-width:1024px){
    .elementor-656 .elementor-element.elementor-element-c4ee1d0{
        padding:80px 0px 50px 0px;
    }
    .elementor-656 .elementor-element.elementor-element-eb8197d{
        --spacer-size:40px;
    }
}
@media(max-width:767px){
    .elementor-656 .elementor-element.elementor-element-c4ee1d0{
        padding:60px 0px 40px 0px;
    }
    .elementor-656 .elementor-element.elementor-element-eb8197d{
        --spacer-size:35px;
    }
}
</style>

<style>

	.sc_layouts_title .sc_layouts_title_content {
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
	}

</style>