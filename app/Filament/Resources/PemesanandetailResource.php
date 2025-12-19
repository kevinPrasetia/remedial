<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Pemesanandetail;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\DeleteBulkAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PemesanandetailResource\Pages;
use App\Filament\Resources\PemesanandetailResource\RelationManagers;
use App\Models\detailpemesanan;

class PemesanandetailResource extends Resource
{
    protected static ?string $model = detailpemesanan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'detailpemesanan';
    protected static ?string $navigationGroup = 'Transaksi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('pemesanan_id')
                ->label('Pemesanan')
                ->relationship('pemesanan', 'id')
                ->required(),

                Select::make('menu_id')
                ->label('Menu')
                ->relationship('menu', 'nama_menu')
                ->searchable()
                ->required(),

                TextInput::make('jumlah')
                ->numeric()
                ->minValue(1)
                ->required(),

                TextInput::make('subtotal')
                ->numeric()
                ->prefix('Rp')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pemesanan.id')
                    ->label('ID Pemesanan'),

                TextColumn::make('menu.nama_menu')
                    ->label('Menu')
                    ->searchable(),

                TextColumn::make('jumlah')
                    ->label('Jumlah'),

                TextColumn::make('subtotal')
                    ->label('Subtotal')
                    ->money('IDR'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManagePemesanandetails::route('/'),
        ];
    }
}
