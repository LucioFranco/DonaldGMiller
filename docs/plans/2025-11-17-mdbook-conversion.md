# mdBook Conversion Implementation Plan

> **For Claude:** REQUIRED SUB-SKILL: Use superpowers:executing-plans to implement this plan task-by-task.

**Goal:** Convert the PHP-based memorial website to static mdBook format for easier long-term maintenance.

**Architecture:** Extract content from 30 PHP modules, convert to Markdown with proper structure, organize 46 images into galleries, extract PDF content, and build static HTML via mdBook. No dynamic features - everything becomes static content.

**Tech Stack:** mdBook (Rust-based static site generator), Markdown, manual HTML-to-Markdown conversion

---

## Task 1: Install mdBook and Initialize Project

**Files:**
- Create: `book.toml`
- Create: `src/SUMMARY.md`
- Create: `.gitignore` (append mdBook entries)

**Step 1: Install mdBook**

Run: `cargo install mdbook`
Expected: mdBook binary installed successfully

**Step 2: Initialize mdBook structure**

Run: `mdbook init --title "Donald G. Miller: A Tribute" --ignore none`
Expected: Creates `book.toml` and `src/` directory

**Step 3: Configure book.toml**

Edit `book.toml`:

```toml
[book]
title = "Donald G. Miller: A Tribute"
authors = ["Lucio Franco", "Family and Friends"]
description = "A memorial website celebrating the life of Donald Gabriel Miller (1927-2012)"
language = "en"

[build]
build-dir = "book"

[output.html]
default-theme = "light"
preferred-dark-theme = "light"
git-repository-url = "https://github.com/luciofranco/DonaldGMiller"
```

**Step 4: Update .gitignore**

Add to `.gitignore`:

```
book/
```

**Step 5: Verify mdBook builds**

Run: `mdbook build`
Expected: Builds successfully, creates `book/` directory

**Step 6: Commit**

```bash
git add book.toml src/ .gitignore
git commit -m "feat: initialize mdBook structure"
```

---

## Task 2: Create Directory Structure

**Files:**
- Create: `src/about/`
- Create: `src/professional/`
- Create: `src/personal/`
- Create: `src/tributes/`
- Create: `src/publications/`
- Create: `src/galleries/`
- Create: `src/appendix/`
- Create: `src/images/`

**Step 1: Create all directories**

Run:
```bash
mkdir -p src/about src/professional src/personal src/tributes src/publications src/galleries src/appendix src/images
```

**Step 2: Verify structure**

Run: `ls -la src/`
Expected: All directories created

**Step 3: Commit**

```bash
git add src/
git commit -m "feat: create mdBook directory structure"
```

---

## Task 3: Copy Images to src/images

**Files:**
- Copy: `images/` → `src/images/`

**Step 1: Copy all images**

Run:
```bash
cp -r images/* src/images/
```

**Step 2: Verify images copied**

Run: `find src/images -type f | wc -l`
Expected: 46 image files

**Step 3: Commit**

```bash
git add src/images/
git commit -m "feat: copy images to mdBook src directory"
```

---

## Task 4: Convert Home Page (Introduction)

**Files:**
- Create: `src/introduction.md`
- Reference: `modules/home.php`

**Step 1: Create introduction.md**

Content from `modules/home.php` converted to Markdown:

```markdown
# Introduction

## Why This Website?

This website was the brainchild of Lucio Daniele Franco, Don Miller's grandson, who wanted to pay tribute to the only grandfather he knew and to build his website design skills. But it is also the collective effort of many individuals: Don's wife, his children and grandchildren, his colleagues and his friends.

This website offers us all an opportunity to collect and appreciate his accomplishments, and share the experiences and love that we feel for Don Miller - husband, father, grandfather, scientist, activist, elected politician, musician and music lover, Jew, environmentalist, and friend. This site belongs to all those who knew him. To quote Kahil Gibran "To live in the heart of those we leave behind is not to die" -- Donald G. Miller, we will never forget you.

We invite you to browse through the various pages of this site, remember the sides to Don Miller that you knew, and discover other sides to him that perhaps you did not know.

---

![Donald G. Miller](images/cover.jpg)

**Donald G. Miller** was a many-faceted man. A highly respected scientist, his work in physical chemistry was known around the world. He was a life-long civic activist, whose 50 years of determined participation in local politics had significant impacts on life in Livermore and the Livermore Valley. He was a founding member of and an active participant in Congregation Beth Emek. He authored 174 papers. His interests ranged from ragtime and classical music to shooting and ballistics. And, he was both loved and highly respected by his family and multitude of friends.

Born and raised in Oakland, California, he spent all but 8 of his 84 years in the Bay Area. He graduated from the University of California, Berkeley in 1949, with a B.S. with honors in chemistry and earned his Ph.D. from the University of Illinois, Urbana-Champaign in 1952. He spent most of his scientific career as a research chemist at the Lawrence Livermore National Laboratory. He was awarded a Fulbright Fellowship in 1960-61, spending the school year teaching at two universities in Lille, France. He also taught at a number of universities around the world over the course of his life.

Livermore's numerous parks, undeveloped hillsides, fountains, charming downtown with cultural spaces, and lack of distracting signs are just a few of the testimonials to Donald Miller's civic activism. He fought against unlimited development, seeking to protect the area's air, water, open space and natural beauty.
```

**Step 2: Write to file**

Write the above content to `src/introduction.md`

**Step 3: Verify file created**

Run: `cat src/introduction.md | head -20`
Expected: Introduction content displayed

**Step 4: Commit**

```bash
git add src/introduction.md
git commit -m "feat: convert home page to introduction.md"
```

---

## Task 5: Convert Don's Sayings

**Files:**
- Create: `src/about/sayings.md`
- Reference: `modules/donssayings.php` and `index.php` (lines 20-36)

**Step 1: Create sayings.md**

Extract all 11 quotes from index.php and donssayings.php:

```markdown
# Don's Sayings

Donald Miller was known for his witty sayings and philosophical observations. Here are some of his most memorable quotes:

- "You can't win them all, or even hardly any"
- "Lose a few, lose a few"
- "Nothing ventured, nothing gained"
- "Do unto others as they would be done to"
- "Never give a kid an even break, they'll outsmart you every time"
- "Winning is better than losing"
- "I'll make you a deal!"
- "No one here but us peons"
- "Cynicism and pessimism are the only true guides to reality"
- "Politics is the art of compromise, but you never compromise if you don't have to"
- "Every question has two sides, but not necessarily of equal weight"
```

**Step 2: Write to file**

Write content to `src/about/sayings.md`

**Step 3: Commit**

```bash
git add src/about/sayings.md
git commit -m "feat: convert Don's sayings to markdown"
```

---

## Task 6: Convert Science Content - Chemistry Work

**Files:**
- Create: `src/professional/chemistry-work.md`
- Reference: `modules/science.php`, `modules/sciencehome.php`

**Step 1: Create chemistry-work.md**

Content from modules/science.php (convert HTML to Markdown, fix encoding):

```markdown
# Donald Miller as a Chemist

Donald G. Miller knew he wanted to be a chemist from the time he was 13 years old, and he spent the better part of the rest of his life doing just that.

He received his B.S. with honors from the University of California, Berkeley in Chemistry in 1949. His Ph.D. came from the University of Illinois three years later, in 1952, with a thesis on the statistical thermodynamics of rubber.

He spent two years as an assistant professor of chemistry at the University of Louisville, where he published the first of his almost 130 articles in peer-reviewed scientific journals. He followed that with a post-doctoral fellowship at the Brookhaven National Laboratory in New York.

From there, he returned to his California roots, working as a senior research chemist for the rest of his career at what is now the Lawrence Livermore National Laboratory, in Livermore, CA. During the more than 50 years that he was affiliated with the "Lab," he also spent time at universities and laboratories in France, Italy, Germany, Australia, and Spain, as well as in Wisconsin and Texas. And, in 1960-61, he had a prestigious Fulbright Teaching Fellowship at the Universite de Lille and the Faculties Catholique in Lille, France.

Although his first published papers involved Boolean algebra, his focus soon moved to the thermodynamics of linear irreversible processes, where he first made his name with a series of articles in the American Journal of Physics. This was followed by articles laying out the proof of the Onsager Reciprocal Relations, including an article Lars Onsager himself cited when he won the Nobel Prize. The Onsager Reciprocal Relations provide symmetrical relations among experimental quantities involving coupled transport processes.

## Research Topics

Among the many topics on which Don Miller published scientific papers were:

- Thermodynamics of rubber
- Boolean algebra
- The spectroscopy of trivalent rare earth ions in aqueous and alcoholic solutions
- Equations of state of gases
- Experimental binary and multi-component solution diffusion coefficient measurements
- Experimental binary and multi-component solution osmotic coefficient measurements
- Experimental binary and multi-component solution density and partial molar volume measurements
- Experimental transference number and electrical conductivity measurements
- Calculation of Onsager transport coefficients, velocity correlation coefficients, and distinct diffusion coefficients
- Comparison of binary-solution-based mixing rules for thermodynamic and transport properties using different composition scales
- Convective (gravitational) instabilities resulting from multi-component diffusion; extending methods for analyzing Rayleigh and Gouy interferometric diffusion data to higher-order mixtures
- Basing multicomponent diffusion on thermodynamics of linear irreversible processes
- Comparing different reference frames for describing diffusion and transport processes

In addition, Don Miller published in the history of science, especially on the life and scientific achievements of Pierre Duhem, a French scientist that he thought had been unfairly ignored, and on Lars Onsager's role in the development of thermodynamics of linear irreversible processes.

---

**Acknowledgement to Joseph Rard for information used in this summary. You can also check out [Joseph Rard's Tribute](../tributes/joe.md).**

**To see an 80th Birthday Article: [80th Birthday Article](../appendix/80th-birthday.md)**
```

**Step 2: Write to file**

Write content to `src/professional/chemistry-work.md`

**Step 3: Commit**

```bash
git add src/professional/chemistry-work.md
git commit -m "feat: convert science/chemistry content to markdown"
```

---

## Task 7: Convert History of Science Content

**Files:**
- Create: `src/professional/history-science.md`
- Reference: `modules/history.php`

**Step 1: Create history-science.md**

Convert modules/history.php to Markdown (read the file first to get actual content).

Run: `cat modules/history.php`

Then create the markdown file with converted content.

**Step 2: Write to file**

Write content to `src/professional/history-science.md`

**Step 3: Commit**

```bash
git add src/professional/history-science.md
git commit -m "feat: convert history of science content"
```

---

## Task 8: Convert Politics Content

**Files:**
- Create: `src/professional/politics.md`
- Reference: `modules/politics.php`

**Step 1: Read source content**

Run: `cat modules/politics.php`

**Step 2: Create politics.md**

Convert HTML to Markdown, fix encoding issues

**Step 3: Write to file**

Write content to `src/professional/politics.md`

**Step 4: Commit**

```bash
git add src/professional/politics.md
git commit -m "feat: convert local politics content"
```

---

## Task 9: Convert Arts Content

**Files:**
- Create: `src/professional/arts.md`
- Reference: `modules/arts.php`

**Step 1: Read source content**

Run: `cat modules/arts.php`

**Step 2: Create arts.md**

Convert HTML to Markdown

**Step 3: Write to file**

Write content to `src/professional/arts.md`

**Step 4: Commit**

```bash
git add src/professional/arts.md
git commit -m "feat: convert arts content"
```

---

## Task 10: Convert Ballistics Content

**Files:**
- Create: `src/professional/ballistics.md`
- Reference: `modules/balistics.php`

**Step 1: Read source content**

Run: `cat modules/balistics.php`

**Step 2: Create ballistics.md**

Convert HTML to Markdown

**Step 3: Write to file**

Write content to `src/professional/ballistics.md`

**Step 4: Commit**

```bash
git add src/professional/ballistics.md
git commit -m "feat: convert ballistics content"
```

---

## Task 11: Convert Family Content

**Files:**
- Create: `src/personal/family.md`
- Reference: `modules/family.php`

**Step 1: Read source content**

Run: `cat modules/family.php`

**Step 2: Create family.md**

Convert HTML to Markdown

**Step 3: Write to file**

Write content to `src/personal/family.md`

**Step 4: Commit**

```bash
git add src/personal/family.md
git commit -m "feat: convert family content"
```

---

## Task 12: Convert Judaism Content

**Files:**
- Create: `src/personal/judaism.md`
- Reference: `modules/judaism.php`

**Step 1: Read source content**

Run: `cat modules/judaism.php`

**Step 2: Create judaism.md**

Convert HTML to Markdown

**Step 3: Write to file**

Write content to `src/personal/judaism.md`

**Step 4: Commit**

```bash
git add src/personal/judaism.md
git commit -m "feat: convert judaism content"
```

---

## Task 13: Convert All Tribute Pages

**Files:**
- Create: `src/tributes/nancy.md`
- Create: `src/tributes/lynne.md`
- Create: `src/tributes/susan.md`
- Create: `src/tributes/marshall.md`
- Create: `src/tributes/joan.md`
- Create: `src/tributes/joe.md`
- Reference: `modules/nancy.php`, `modules/lynne.php`, etc.

**Step 1: Read each tribute module**

Run:
```bash
for file in modules/{nancy,lynne,susan,marshall,joan,joe}.php; do echo "=== $file ==="; cat "$file"; echo; done
```

**Step 2: Convert each tribute to markdown**

For each file, convert HTML to Markdown and write to corresponding `src/tributes/*.md`

**Step 3: Commit**

```bash
git add src/tributes/
git commit -m "feat: convert all tribute pages to markdown"
```

---

## Task 14: Convert Publications and Split by Decade

**Files:**
- Create: `src/publications/1950s.md`
- Create: `src/publications/1960s.md`
- Create: `src/publications/1970s.md`
- Create: `src/publications/1980s.md`
- Create: `src/publications/1990s.md`
- Create: `src/publications/2000s-2010s.md`
- Reference: `modules/publications.php`

**Step 1: Read publications.php**

Run: `cat modules/publications.php`

**Step 2: Split publications by decade**

Parse the publication list and split into decade files based on year in each citation.

Publications 1-23 (1952-1962) → 1950s.md
Publications continuing through decades...

**Step 3: Write each decade file**

Create header for each:

```markdown
# Publications - [Decade]

This page lists Donald G. Miller's scientific publications from [start year] to [end year].

---

[Publications listed here]
```

**Step 4: Commit**

```bash
git add src/publications/
git commit -m "feat: convert publications split by decade"
```

---

## Task 15: Convert Photo Galleries

**Files:**
- Create: `src/galleries/don-and-miriam.md`
- Create: `src/galleries/don-and-parents.md`
- Create: `src/galleries/family.md`
- Create: `src/galleries/politics.md`
- Reference: `modules/donandmiriam.php`, `modules/familyslide.php`, etc.

**Step 1: Read gallery PHP files**

Run:
```bash
cat modules/familyslide.php
```

**Step 2: Create gallery markdown files**

For `src/galleries/family.md`:

```markdown
# Family Photo Gallery

![Don, Nancy, Miriam and Lynne Miller 1966 - Nancy 8th grade graduation](../images/photo/family/1.png)
*Don, Nancy, Miriam and Lynne Miller 1966 - Nancy 8th grade graduation*

![Don Miller sailing at Lake Merritt 1971](../images/photo/family/2.png)
*Don Miller sailing at Lake Merritt 1971*

[Continue for all 13 family photos with captions from familyslide.php]
```

Repeat for other galleries.

**Step 3: Commit**

```bash
git add src/galleries/
git commit -m "feat: convert photo galleries to static markdown"
```

---

## Task 16: Extract and Convert PDFs

**Files:**
- Create: `src/appendix/80th-birthday.md`
- Create: `src/appendix/nrag.md`
- Create: `src/appendix/prag.md`
- Create: `src/appendix/crag.md`
- Reference: `80thbirthday.pdf`, `nrag.pdf`, `prag.pdf`, `crag.pdf`

**Step 1: Install pdftotext (if needed)**

Run: `brew install poppler` (macOS) or appropriate package manager

**Step 2: Extract text from each PDF**

Run:
```bash
pdftotext 80thbirthday.pdf -
```

**Step 3: Convert extracted text to markdown**

Create proper markdown formatting for each PDF's content in corresponding `.md` files.

**Step 4: Copy original PDFs to src**

Run:
```bash
cp *.pdf src/appendix/
```

**Step 5: Commit**

```bash
git add src/appendix/
git commit -m "feat: extract and convert PDF content to markdown"
```

---

## Task 17: Create SUMMARY.md Table of Contents

**Files:**
- Create: `src/SUMMARY.md`

**Step 1: Create SUMMARY.md**

```markdown
# Summary

[Introduction](./introduction.md)

# About Donald G. Miller

- [Don's Sayings](./about/sayings.md)

# Professional Life

- [Science & Chemistry](./professional/chemistry-work.md)
  - [History of Science](./professional/history-science.md)
- [Local Politics](./professional/politics.md)
- [The Arts](./professional/arts.md)
- [Ballistics](./professional/ballistics.md)

# Personal Life

- [Family](./personal/family.md)
- [Judaism](./personal/judaism.md)

# Tributes from Loved Ones

- [Nancy - From an Elder Daughter](./tributes/nancy.md)
- [Lynne - From a Daughter and Grandchildren](./tributes/lynne.md)
- [Susan - Tribute from a Niece](./tributes/susan.md)
- [Marshall - From a Politician](./tributes/marshall.md)
- [Joan - From a Publisher](./tributes/joan.md)
- [Joe - From a Scientist](./tributes/joe.md)

# Scientific Publications

- [1950s Publications](./publications/1950s.md)
- [1960s Publications](./publications/1960s.md)
- [1970s Publications](./publications/1970s.md)
- [1980s Publications](./publications/1980s.md)
- [1990s Publications](./publications/1990s.md)
- [2000s-2010s Publications](./publications/2000s-2010s.md)

# Photo Galleries

- [Don and Miriam](./galleries/don-and-miriam.md)
- [Don and Parents](./galleries/don-and-parents.md)
- [Family Photos](./galleries/family.md)
- [Politics Photos](./galleries/politics.md)

# Appendix

- [80th Birthday Article](./appendix/80th-birthday.md)
- [Additional Materials](./appendix/nrag.md)
```

**Step 2: Write to file**

Write content to `src/SUMMARY.md`

**Step 3: Commit**

```bash
git add src/SUMMARY.md
git commit -m "feat: create complete table of contents"
```

---

## Task 18: Build and Verify mdBook

**Files:**
- None (verification step)

**Step 1: Build the book**

Run: `mdbook build`
Expected: Build succeeds with no errors

**Step 2: Serve locally**

Run: `mdbook serve`
Expected: Server starts on http://localhost:3000

**Step 3: Manual verification checklist**

- [ ] All chapters load without 404 errors
- [ ] All images display correctly
- [ ] All internal links work
- [ ] Search functionality works
- [ ] Navigation is logical and complete
- [ ] No broken references

**Step 4: Fix any issues found**

Address any broken links, missing images, or formatting issues.

**Step 5: Commit fixes**

```bash
git add [fixed files]
git commit -m "fix: resolve build issues and broken links"
```

---

## Task 19: Archive Original PHP Files

**Files:**
- Create: `archive/`
- Move: All PHP files, CSS, JS to `archive/`

**Step 1: Create archive directory**

Run: `mkdir archive`

**Step 2: Move PHP and related files**

Run:
```bash
git mv index.php body.php menu.php head.php 404.php homepagebasic.php archive/
git mv modules archive/
git mv css archive/
git mv js archive/
```

**Step 3: Keep images in root for reference**

Images already copied to src/images, original can stay for now

**Step 4: Commit**

```bash
git add -A
git commit -m "chore: archive original PHP files"
```

---

## Task 20: Update README.md

**Files:**
- Modify: `README.md`

**Step 1: Rewrite README.md**

```markdown
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
```

**Step 2: Write to file**

Write content to `README.md`

**Step 3: Commit**

```bash
git add README.md
git commit -m "docs: update README for mdBook"
```

---

## Task 21: Remove Dockerfile

**Files:**
- Delete: `Dockerfile`

**Step 1: Remove Dockerfile**

Run: `git rm Dockerfile`

**Step 2: Commit**

```bash
git commit -m "chore: remove Dockerfile (no longer needed)"
```

---

## Task 22: Final Build and Validation

**Files:**
- None (final verification)

**Step 1: Clean build**

Run:
```bash
rm -rf book/
mdbook build
```

Expected: Clean build with no errors

**Step 2: Serve and final review**

Run: `mdbook serve`

**Step 3: Complete final checklist**

- [ ] All content converted
- [ ] All images working
- [ ] All links working
- [ ] Search working
- [ ] No PHP files in main directory
- [ ] README updated
- [ ] Dockerfile removed

**Step 4: Final commit**

```bash
git add -A
git commit -m "chore: final cleanup and validation"
```

---

## Task 23: Update CLAUDE.md

**Files:**
- Modify: `CLAUDE.md`

**Step 1: Update CLAUDE.md**

Replace PHP-specific sections with mdBook information:

Add section:
```markdown
## mdBook Commands

### Development
```bash
# Install mdBook (one-time)
cargo install mdbook

# Serve with live reload
mdbook serve
# Access at http://localhost:3000
```

### Production Build
```bash
# Build static HTML
mdbook build
# Output in book/ directory
```

### Content Structure

All content is in Markdown format under `src/`:
- `src/SUMMARY.md` - Table of contents (defines book structure)
- `src/*.md` - Chapter files
- `src/images/` - All images
```

Remove Docker and PHP sections.

**Step 2: Commit**

```bash
git add CLAUDE.md
git commit -m "docs: update CLAUDE.md for mdBook"
```

---

## Success Criteria

- [ ] mdBook builds without errors
- [ ] All 30 content modules converted (excluding dagerman)
- [ ] All 46 images accessible and displaying
- [ ] All 4 PDFs extracted and converted
- [ ] 174+ publications organized by decade
- [ ] All internal links working
- [ ] Search functionality working
- [ ] Original PHP files archived
- [ ] Dockerfile removed
- [ ] README.md updated
- [ ] CLAUDE.md updated

## Notes for Engineer

- **Character encoding**: PHP files use HTML entities like `&sbquo;` (comma), `&rsquo;` (apostrophe), `&quot;` (quote). Convert these to proper Unicode characters.
- **Image paths**: PHP uses `/images/`, mdBook needs `../images/` (relative paths) or adjust based on chapter depth.
- **Link conversion**: PHP uses `?page=module`, mdBook uses relative paths like `../tributes/nancy.md`.
- **Gallery conversion**: PHP galleries use JavaScript for prev/next. Convert to simple list of all images with captions.
- **Publications splitting**: Parse publication year from each entry to split by decade correctly.
- **PDF extraction**: Some PDFs may need manual cleanup after text extraction for proper formatting.
