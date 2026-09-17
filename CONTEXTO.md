# Tienda Mario — Contexto del proyecto

## Origen
El amigo de Oscar quiere un **nuevo diseño** para su sitio web `https://marioverarte.com/` (artista plástico, galería de arte). El diseño debe ser **inspirado en el estilo actual** (galería inmersiva, tipografía elegante) pero con un **diseño nuevo** (no copia directa del tema Divi existente).

## Sitio actual (referencia)
- URL: `https://marioverarte.com/`
- Plataforma: **WordPress con tema Divi**
- Secciones: Inicio / Galería (Tentación, Retratos) / Sobre mí / Contacto
- Más: Política de Cookies, Privacidad, Términos y Condiciones
- Información: Mario Vera (1976, Elda, Alicante) — Artista Visual (optometría + creación)
- Paleta visual: negros, blancos, grises de galería de arte

## Solución implementada
Se creó un **child theme de Divi** llamado **"Tienda Mario"** que sobrescribe el look manteniendo WordPress intacto (fácil de revertir).

## Archivos del proyecto
- **Carpeta local**: `C:\Users\ohamm\OneDrive\Documentos\Default Project\tienda-mario\`
- Contiene todo el child theme + README + CONTEXTO
- Tema padre **Divi** debe estar instalado y activo (requisito)

## Estructura del tema
- `style.css` — paleta oscuro/blanco, tipografía Playfair Display + Inter, masonry, header transparente, footer minimal
- `functions.php` — carga de CSS padre/hijo, Google Fonts, menús, thumbnails
- `header.php` / `footer.php` — header transparente + footer minimal
- `index.php` — hero + galería de thumbnails
- `page.php` — plantilla general de página
- `page-gallery.php` — plantilla "Galería Mario" (masonry completo)
- `single.php` — entradas
- `screenshot.png` — vista previa en dashboard

## Instalación en el hosting del amigo
1. Subir carpeta `tienda-mario/` a `wp-content/themes/` vía FTP/SFTP
2. Activar tema "Tienda Mario" en Apariencia → Temas
3. Asignar menús: `primary` (Inicio, Galería, Sobre mí, Contacto) + `footer` (Cookies, Privacidad, T&C)
4. Subir fotos de Mario como Medios de WordPress

## Estado
- **Hecho**: child theme completo con diseño nuevo, README, CONTEXTO
- **Pendiente**: subirlo al hosting de Mario y activarlo
- **Nota**: acceso total al hosting confirmado
