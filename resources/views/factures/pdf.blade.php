<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Facture #{{ $facture->id }}</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');

    /* Reset & base */
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto,
        Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      background: #f4f6f8;
      color: #333;
      margin: 0;
      padding: 40px 20px;
      line-height: 1.5;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    .container {
      max-width: 900px;
      margin: 0 auto;
      background: #ffffff;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      padding: 40px 50px;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 2px solid #4f46e5; /* Indigo 600 */
      padding-bottom: 20px;
      margin-bottom: 35px;
    }

    .invoice-title {
      font-size: 2.25rem;
      font-weight: 700;
      color: #4f46e5;
      margin: 0;
      letter-spacing: -0.03em;
    }

    .date-repair {
      margin-top: 6px;
      font-weight: 600;
      color: #6b7280; /* Gray-500 */
      font-size: 0.95rem;
    }

    .company-details {
      text-align: right;
      color: #374151; /* Gray-700 */
      font-weight: 600;
      font-size: 0.95rem;
      line-height: 1.3;
    }

    section {
      margin-bottom: 40px;
    }

    .section-title {
      font-weight: 700;
      font-size: 1.15rem;
      color: #111827; /* Gray-900 */
      border-bottom: 2px solid #e0e7ff; /* Indigo-100 */
      padding-bottom: 8px;
      margin-bottom: 18px;
      letter-spacing: 0.03em;
    }

    .client-info p {
      margin: 6px 0;
      font-weight: 500;
      color: #4b5563; /* Gray-600 */
    }

    table {
      width: 100%;
      border-collapse: separate;
      border-spacing: 0 10px;
      background: transparent;
    }

    thead tr {
      background-color: #4f46e5; /* Indigo 600 */
      color: #ffffff;
      text-transform: uppercase;
      font-size: 0.85rem;
      letter-spacing: 0.07em;
      border-radius: 12px 12px 0 0;
    }

    thead th {
      padding: 15px 20px;
      text-align: left;
      font-weight: 600;
    }

    tbody tr {
      background: #f9fafb; /* Gray-50 */
      box-shadow: 0 2px 5px rgba(79, 70, 229, 0.1);
      border-radius: 10px;
      transition: background-color 0.2s ease;
    }

    tbody tr:hover {
      background: #eef2ff; /* Indigo-50 */
    }

    tbody td {
      padding: 14px 20px;
      font-weight: 500;
      color: #374151; /* Gray-700 */
      vertical-align: middle;
    }

    tbody td:first-child {
      font-weight: 700;
      color: #4f46e5;
      width: 40px;
    }

    .summary {
      max-width: 320px;
      margin-left: auto;
      background: #eef2ff; /* Indigo-50 */
      border-radius: 12px;
      padding: 25px 30px;
      box-shadow: 0 10px 30px rgba(79, 70, 229, 0.1);
      font-size: 1rem;
      font-weight: 600;
      color: #4f46e5;
      letter-spacing: 0.02em;
    }

    .summary tr td:first-child {
      font-weight: 600;
      color: #4338ca; /* Indigo-700 */
      padding-bottom: 12px;
    }

    .summary tr.total td {
      font-size: 1.25rem;
      font-weight: 700;
      color: #312e81; /* Indigo-900 */
      border-top: 2px solid #4338ca;
      padding-top: 12px;
    }

    .signature {
      margin-top: 60px;
      text-align: center;
      font-weight: 700;
      font-size: 1.1rem;
      color: #4f46e5;
      letter-spacing: 0.05em;
      user-select: none;
    }

    footer {
      margin-top: 80px;
      text-align: center;
      font-size: 1rem;
      color: #6b7280;
      font-weight: 600;
      letter-spacing: 0.04em;
      user-select: none;
    }

    @media (max-width: 600px) {
      header {
        flex-direction: column;
        align-items: flex-start;
      }

      .company-details {
        text-align: left;
        margin-top: 15px;
      }

      .summary {
        max-width: 100%;
        margin: 0 0 30px 0;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <header>
      <div>
        <h1 class="invoice-title">Facture N°: {{ $facture->id }}</h1>
        <p class="date-repair">Date d'émission: {{ \Carbon\Carbon::parse($facture->date_issued)->format('d/m/Y') }}</p>
        <p class="date-repair">Réparation: {{ $facture->repairs->description ?? 'N/A' }}</p>
      </div>
      <div class="company-details">
        <p><strong>AutoGestion</strong></p>
        <p>123 Avenue du Garage</p>
        <p>Marrakech, Maroc</p>
        <p>+212 6 12 34 56 78</p>
        <p>contact@autogestion.ma</p>
      </div>
    </header>

    <section class="client-info">
      <div class="section-title">Informations du client</div>
      <p><strong>Nom:</strong> {{ $facture->repairs->client_name ?? 'N/A' }}</p>
      <p><strong>Téléphone:</strong> {{ $facture->repairs->client_phone ?? 'N/A' }}</p>
    </section>

    <section>
      <div class="section-title">Détails de la réparation</div>
      <table>
        <thead>
          <tr>
            <th>#</th>
            <th>Pièce</th>
            <th>Quantité</th>
            <th>Prix Unitaire (DH)</th>
            <th>Total (DH)</th>
          </tr>
        </thead>
        <tbody>
          @php $subtotal = 0; @endphp
          @foreach ($facture->details as $index => $detail)
            @php
              $lineTotal = $detail->unit_price * $detail->quantity;
              $subtotal += $lineTotal;
            @endphp
            <tr>
              <td>{{ $index + 1 }}</td>
              <td>{{ $detail->piece->part_name ?? $detail->part_name ?? 'Inconnu' }}</td>
              <td>{{ $detail->quantity }}</td>
              <td>{{ number_format($detail->unit_price, 2) }}</td>
              <td>{{ number_format($lineTotal, 2) }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </section>

    @php
      $taxRate = 0.20; // TVA 20%
      $taxAmount = $subtotal * $taxRate;
      $totalToPay = $subtotal + $taxAmount;
    @endphp

    <table class="summary">
      <tr>
        <td>Sous-total:</td>
        <td>{{ number_format($subtotal, 2) }} DH</td>
      </tr>
      <tr>
        <td>TVA (20%):</td>
        <td>{{ number_format($taxAmount, 2) }} DH</td>
      </tr>
      <tr class="total">
        <td>Total à payer:</td>
        <td>{{ number_format($totalToPay, 2) }} DH</td>
      </tr>
    </table>

    <div class="signature">
      <p>Signature du technicien: _______________________________</p>
    </div>

    <footer>
      Merci pour votre confiance !
    </footer>
  </div>
</body>

</html>
