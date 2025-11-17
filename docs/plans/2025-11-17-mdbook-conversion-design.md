# Donald G. Miller Memorial Website - mdBook Conversion Design

**Date:** 2025-11-17
**Status:** Approved

## Overview

Convert the legacy PHP-based memorial website for Donald G. Miller into a static mdBook format for easier long-term maintenance. This eliminates PHP/Docker dependencies while preserving all content and making it more accessible.

## Motivation

The current PHP-based website requires Apache/PHP/Docker to run. Converting to mdBook provides:
- **Simplified maintenance**: No runtime dependencies, just static HTML
- **Future-proof format**: Markdown is universally readable and editable
- **Better accessibility**: Built-in search, responsive design, clean navigation
- **Easy deployment**: Can be viewed locally or hosted anywhere

## Scope

### In Scope
- Convert all 30 PHP content modules (excluding dagerman.php) to Markdown
- Organize 46 images into appropriate gallery pages
- Extract and convert 4 PDF documents to Markdown
- Reorganize 174+ scientific publications by decade
- Convert interactive features to static equivalents
- Archive original PHP files for reference

### Out of Scope
- dagerman.php module (unrelated to memorial content)
- Docker deployment (switching to static file serving)
- Interactive JavaScript features (converting to static content)

## Technical Approach

### Content Extraction

**PHP to Markdown Conversion:**
1. Parse each PHP module file
2. Extract HTML/text content
3. Fix character encoding issues (`&sbquo;` → `,`, `&rsquo;` → `'`, etc.)
4. Convert HTML to Markdown (headings, bold, italic, links, images)
5. Validate all internal links and image references

**Interactive to Static:**
- **Quote rotator**: List all 11 quotes on "Don's Sayings" page
- **Image galleries**: Display all images in sequence with captions (no prev/next buttons)
- **Pagination**: Remove JavaScript pagination, display content in full

**PDF Processing:**
- Extract text from 80thbirthday.pdf, nrag.pdf, prag.pdf, crag.pdf
- Convert to Markdown chapters
- Place in Appendix section
- Keep original PDFs as downloadable assets

### Structure Design

**mdBook Organization:**

```
1. Introduction (home page content)

2. About Donald G. Miller
   - Don's Sayings

3. Professional Life
   - Science & Chemistry
     - Chemistry Work
     - History of Science
   - Local Politics
   - The Arts
   - Ballistics

4. Personal Life
   - Family
   - Judaism

5. Tributes from Loved Ones
   - Nancy (Elder Daughter)
   - Lynne (Daughter and Grandchildren)
   - Susan (Niece)
   - Marshall (Politician)
   - Joan (Publisher)
   - Joe (Scientist)

6. Scientific Publications
   - 1950s Publications
   - 1960s Publications
   - 1970s Publications
   - 1980s Publications
   - 1990s Publications
   - 2000s-2010s Publications

7. Photo Galleries
   - Don and Miriam
   - Don and Parents
   - Family
   - Politics

8. Appendix
   - 80th Birthday Article
   - Additional Materials
```

**Rationale:** This structure groups content by life facets (professional vs personal) while maintaining the current site's themes. It makes content discoverable by interest area and puts reference material (publications, photos) at the end.

### File Organization

```
/
├── book.toml              # mdBook configuration
├── src/
│   ├── SUMMARY.md        # Table of contents
│   ├── introduction.md
│   ├── about/
│   │   └── sayings.md
│   ├── professional/
│   │   ├── chemistry-work.md
│   │   ├── history-science.md
│   │   ├── politics.md
│   │   ├── arts.md
│   │   └── ballistics.md
│   ├── personal/
│   │   ├── family.md
│   │   └── judaism.md
│   ├── tributes/
│   │   ├── nancy.md
│   │   ├── lynne.md
│   │   ├── susan.md
│   │   ├── marshall.md
│   │   ├── joan.md
│   │   └── joe.md
│   ├── publications/
│   │   ├── 1950s.md
│   │   ├── 1960s.md
│   │   ├── 1970s.md
│   │   ├── 1980s.md
│   │   ├── 1990s.md
│   │   └── 2000s-2010s.md
│   ├── galleries/
│   │   ├── don-and-miriam.md
│   │   ├── don-and-parents.md
│   │   ├── family.md
│   │   └── politics.md
│   ├── appendix/
│   │   ├── 80th-birthday.md
│   │   └── additional.md
│   └── images/
│       ├── cover.jpg
│       ├── livhills4.png
│       └── photo/
│           ├── donandmiriam/
│           ├── donandparents/
│           ├── family/
│           └── politics/
├── book/                  # Generated HTML output
├── archive/              # Original PHP files
│   ├── index.php
│   ├── modules/
│   ├── css/
│   └── js/
└── README.md             # Updated with mdBook instructions
```

### Module Mapping

| Current PHP Module | New Markdown File |
|-------------------|-------------------|
| home.php | introduction.md |
| donssayings.php | about/sayings.md |
| science.php + sciencehome.php | professional/chemistry-work.md |
| history.php | professional/history-science.md |
| politics.php | professional/politics.md |
| arts.php | professional/arts.md |
| balistics.php | professional/ballistics.md |
| family.php | personal/family.md |
| judaism.php | personal/judaism.md |
| nancy.php | tributes/nancy.md |
| lynne.php | tributes/lynne.md |
| susan.php | tributes/susan.md |
| marshall.php | tributes/marshall.md |
| joan.php | tributes/joan.md |
| joe.php | tributes/joe.md |
| publications.php | publications/*.md (split by decade) |
| familyslide.php | galleries/family.md |
| politicsslide.php | galleries/politics.md |
| donandmiriam.php | galleries/don-and-miriam.md |
| donandparents.php | galleries/don-and-parents.md |

**Excluded:** dagerman.php (unrelated content)

## Implementation Phases

### Phase 1: Setup
1. Install mdBook (`cargo install mdbook`)
2. Initialize mdBook structure (`mdbook init`)
3. Configure book.toml with metadata and theme
4. Create directory structure in src/

### Phase 2: Content Conversion
1. Convert each PHP module to Markdown
2. Fix character encoding throughout
3. Copy and organize all images
4. Extract PDF content to Markdown
5. Build SUMMARY.md table of contents

### Phase 3: Verification & Cleanup
1. Build and review complete mdBook
2. Verify all links and images
3. Test search functionality
4. Move PHP files to archive/ directory
5. Update README.md with new instructions
6. Remove Dockerfile (no longer needed)

## Build & Serve Commands

**Installation (one-time):**
```bash
cargo install mdbook
```

**Development:**
```bash
mdbook serve
# Access at http://localhost:3000 with live reload
```

**Production Build:**
```bash
mdbook build
# Output in book/ directory
# Can be opened directly or deployed anywhere
```

## Success Criteria

- [ ] All 30 content modules converted to Markdown
- [ ] All 46 images accessible and properly displayed
- [ ] All 4 PDFs extracted and converted
- [ ] 174+ publications organized by decade
- [ ] All internal links working
- [ ] Search functionality working
- [ ] Book builds without errors
- [ ] Original PHP files archived
- [ ] README.md updated with new instructions

## Future Considerations

- Could deploy to GitHub Pages for public access
- Could add custom CSS theme to match original green/orange color scheme
- Could add additional galleries or content as new materials become available
- Markdown files are easily editable for future updates
