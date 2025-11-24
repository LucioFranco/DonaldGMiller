# Donald G. Miller: A Tribute

A memorial website celebrating the life of Donald Gabriel Miller (1927-2012).

This site has been converted from PHP to a static mdBook format for easier long-term maintenance.

## Building the Book

### Prerequisites

Install mdBook:
```bash
cargo install mdbook
```

### Development

Serve with live reload:
```bash
mdbook serve
```

Access at http://localhost:3000

### Production Build

Build static HTML:
```bash
mdbook build
```

Output is in the `book/` directory.

## Deployment

The generated `book/` directory contains static HTML and can be:
- Opened directly in a browser
- Served with any web server
- Deployed to GitHub Pages, Netlify, or similar services

## Content

This memorial site includes:
- Biography and life story
- Professional achievements (science, politics, arts, ballistics)
- Personal life (family, Judaism)
- Tributes from family and colleagues
- 174+ scientific publications
- Photo galleries

## History

Original PHP-based website created in 2012. Converted to mdBook in 2025 for easier maintenance.

Original PHP files archived in `archive/` directory.
