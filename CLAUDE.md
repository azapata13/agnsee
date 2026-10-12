# Agnsee — Thème WordPress

## Instructions Claude Code
- Toujours committer et pusher directement sur branch main
- Ne jamais créer de nouvelle branche sauf demande explicite
- Modifier seulement le bloc/fichier demandé, ne jamais toucher aux autres sections
- Commits courts et descriptifs en français
- Avant de pousser : vérifier la syntaxe PHP (php -l) et l'équilibre des spans
  trilingues avec grep -c "class=\"lang-fr\"" / lang-en / lang-es (doivent être égaux)

## Contexte projet
Site vitrine (PAS ecommerce, pas de WooCommerce, pas de page builder) pour Agnsee —
agent manufacturier représentant des produits techniques pour l'horticulture
protégée au Canada, avec une cible de distributeurs internationaux.

URL: agnsee.ca
Repo: azapata13/agnsee (branche main)
Stack: WordPress — thème PHP/CSS/JS 100% custom, aucun page builder, aucun WooCommerce
Hébergement: cPanel (serveur LiteSpeed) — déploiement par git pull, purge du
cache LiteSpeed après chaque pull

## État actuel — le thème est complet et en production
- functions.php — setup WP, bilingue→trilingue, helpers images/vidéos, Customizer
- style.css — design system complet
- header.php / footer.php — nav sticky, méga-menu, toggle FR/EN/ES
- page-home.php — hero vidéo, bloc scroll-scrub vidéo, "Notre rôle", scroll-story
  produits, teaser outils, logos partenaires (masqués), CTA contact
- page-produits.php — carrousel coverflow 3D (4 produits)
- page-safegrow-ag.php / page-booster.php / page-grow-genius.php /
  page-safe-disinfectant.php — pages produit dédiées
- page-contact.php + assets/js/contact-form.js — formulaire via FormSubmit.co
- page-services.php, page-a-propos.php, page-outils.php, page-calculateur-safegrow-ag.php

## Produits représentés
SafeGrow AG, Booster, Grow Genius, Safe Disinfectant (Aranet a été retiré du site)

## Design
- Minimaliste style Apple, pas de vert ni de doré dans les accents visuels
  (eyebrows neutralisés en gris, boutons blanc/noir sur fonds sombres)
- Police: Inter
- Accent historique #1a7a4a toujours utilisé pour boutons primaires/liens standards

## Trilingue
- Cookie: agnsee_lang (fr par défaut)
- Classes: .lang-fr / .lang-en / .lang-es
- CSS: [data-lang="fr"] .lang-en, [data-lang="fr"] .lang-es {display:none!important;}
  (et symétrique pour en/es)
- Toujours inclure les 3 langues dans chaque texte ajouté

## Fonctionnalités clés déjà en place
- Hero vidéo plein écran + bloc "scroll-scrub" vidéo sticky ("Un fabricant,
  un monde de distributeurs") piloté par la position de scroll
- Formulaire de contact → FormSubmit.co → info@agnsee.ca (Google Workspace Group,
  activation confirmée fonctionnelle)
- Carrousel coverflow pour la page Produits
- Logos partenaires (Hort Americas) masqués temporairement avec
  <?php if ( false ) : ?> — NE PAS SUPPRIMER, à remettre plus tard
- Helpers agnsee_image_url() / agnsee_video_url() : overrides locaux dans
  assets/images|video/ sans besoin de redéploiement, avec fallback sur URLs
  live hardcodées

## Travail en attente (différé par le client)
Compression images/vidéos, meta SEO/OG, finir les outils (calculateur HOCl),
template 404 custom, analytics, activer le cache de page LiteSpeed complet

## Workflow déploiement
1. Modifier le fichier local
2. git add . && git commit -m "message" && git push origin main
3. Sur cPanel: git pull origin main (dans wp-content/themes/agnsee/)
4. Purger le cache LiteSpeed
5. Vérifier sur agnsee.ca
