# Tienda Mario — Tema WordPress (Child Theme de Divi)

Diseño tipo galería de arte para Mario Vera (artista plástico). Basado en el tema padre **Divi**.

## Instalación rápida (acceso total al hosting)

1. Conéctate por FTP/SFTP o al gestor de archivos del hosting.
2. Sube la carpeta `tienda-mario/` a `wp-content/themes/`.
3. En el panel de WordPress → **Apariencia → Temas** → activa **"Tienda Mario"**.
4. En **Apariencia → Menús** asigna:
   - Menú **"primary"** → enlaza las páginas: Inicio, Galería, Sobre mí, Contacto.
   - Menú **"footer"** → enlaza: Política de Cookies, Política de Privacidad, Términos y Condiciones.
5. Asegúrate de que el tema padre **Divi** está instalado y activo (requisito obligatorio).
6. Sube las fotos de Mario como **Medios** de WordPress; la galería se genera automáticamente desde la biblioteca de medios.

## Estructura de archivos

```
tienda-mario/
├── style.css            → Estilos del tema (paleta negro/blanco, tipografía Playfair Display + Inter)
├── functions.php        → Carga de CSS, Google Fonts, soporte de menús y thumbnails
├── header.php           → Header transparente con logo y menú hamburguesa (móvil)
├── footer.php           → Footer minimal con copyright y enlaces legales
├── index.php            → Portada con hero + galería de thumbnails
├── page.php             → Plantilla de página general (Sobre mí, Contacto)
├── page-gallery.php     → Plantilla "Galería Mario" (masonry completo)
├── single.php           → Entradas individuales
├── screenshot.png       → Vista previa del tema en el dashboard
└── README.md            → Este archivo
```

## Características del diseño

- **Paleta**: negro (`#0a0a0a`), blanco (`#fafafa`), grises (`#999`, `#ccc`).
- **Tipografía**: *Playfair Display* (títulos serif) + *Inter* (cuerpo sans-serif).
- **Header**: transparente fijo, con scroll se vuelve semitransparente oscuro.
- **Galería**: masonry responsivo (3 → 2 → 1 columnas), overlay sutil al hover.
- **Responsive**: menú hamburguesa en móvil, galería adaptable.
- **Footer**: minimal con enlaces legales del sitio.

## Notas

- No modificar el tema padre Divi; todos los overrides van aquí.
- Si necesitas personalizar colores o tipografía, edita las variables `:root` en `style.css`.
- El sitio original de referencia: https://marioverarte.com/
